<?php

namespace App\Http\Controllers;

use App\Enum\Car\Status;
use App\Http\Requests\Cars\Save as SaveRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Comment;
use App\Models\Tag;

class CarController extends Controller
{
    public function index()
    {
        $bodyTypes = config('app-car.body');
        // $cars = Car::with('brand.country', 'tags')->latest()->get();
        $cars = Car::with('brand.country', 'tags')->ofActive()->latest()->get();

        return view('cars.index', compact('cars', 'bodyTypes'));
    }

    public function create()
    {
        $bodyTypes = config('app-car.body');
        $brandsTitleWithId = Brand::orderBy('title')->get()->pluck('title', 'id');
        $tagsTitleWithId = Tag::orderBy('title')->get()->pluck('title', 'id');

        return view('cars.create', compact('bodyTypes', 'brandsTitleWithId', 'tagsTitleWithId'));
    }

    public function store(SaveRequest $request)
    {
        $validated = $request->validated();
        $tagsId = $validated['tags'];
        unset($validated['tags']);

        $car = Car::create($validated);
        $car->tags()->attach($tagsId);

        return redirect()->route('cars.show', [$car->id])->with('status', 'create');
    }

    // // Получить проверенные входные данные...
    // $validated = $request->validated();

    // // Получить часть проверенных входных данных...
    // $validated = $request->safe()->only(['name', 'email']);
    // $validated = $request->safe()->except(['name', 'email']);



    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        //dd($car::class);
        //dd($car->canDelete);
        // $car->comments()->create(['body' => 'test123qwe']);  Один из способов добавления
        //dd($car->comments()->first());

        // $comment = new Comment();
        // $comment->body = 'new123';
        // $comment->commentable()->associate($car);
        // $comment->save();

        return view('cars.show', compact('car'));
    }

    public function edit(string $id)
    {
        $bodyTypes = config('app-car.body');
        $brandsTitleWithId = Brand::orderBy('title')->get()->pluck('title', 'id');
        $tagsTitleWithId = Tag::orderBy('title')->get()->pluck('title', 'id');
        $car = Car::findOrFail($id);

        return view('cars.edit', compact('car', 'bodyTypes', 'brandsTitleWithId', 'tagsTitleWithId'));
    }

    public function update(SaveRequest $request, string $id)
    {
        // $validated = $request->validated();
        // $tagsId = $validated['tags'] ?? null;
        // unset($validated['tags']);

        $validated = collect($request->validated());
        $car = Car::findOrFail($id);
        $car->update($validated->except(['tags'])->toArray());
        $car->tags()->sync($validated->get('tags'));

        return redirect()->route('cars.show', [$car->id])->with('status', 'update');
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        if ($car->canDelete) {
            $car->tags()->detach();
            $car->delete();
            return redirect()->route('cars.index')->with('status', 'delete');
        } else {
            return redirect()->route('cars.index')->with('status', 'deleteFail');
        }
    }

    // When using the soft delete: 

    public function trash()
    {
        $bodyTypes = config('app-car.body');
        $cars = Car::onlyTrashed()->latest()->get();
        return view('cars.trash', compact('cars', 'bodyTypes'));
    }

    public function restore(string $id)
    {
        $car = Car::withTrashed()->findOrFail($id);
        $status = '';
        if (Car::where('vin', $car->vin)->doesntExist()) {
            $car->restore();
            $status = 'restore';
        } else {
            $status = 'restoreFail';
        }
        return redirect()->route('cars.index')->with('status', $status); // хз как правильно концептуально сделать тут что бы вин подставлялся в сообщение
    }
}
