<?php

namespace App\Http\Controllers;

use App\Http\Requests\Commnets\CommentsRequest;
use App\Interface\ICommentable;
use App\Models\Article;
use App\Models\Car;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Первый способ добавление комментария.
    // Через модель комента и добавления ему полей commentable_type и commentable_id вручную
    // Эти поля подтягиваются через hidden input поля.
    // Их валидация нестандартная (одно поле зависит от другого)
    public function store(CommentsRequest $request)
    {
        Comment::create($request->validated());

        return back()->with('status', 'create');
    }

    // Второй способ добавления комментариея
    // Через родительскую модель создаем дочернюю модель комента
    // Здесь информация о родительской сущности передается 
    // в параметрах  роута: comments2/{modelName}/id/{id}
    // Хотя можно было бы передать как и в первом случае через hidden input
    // Валидация поля 'body' простая, поэтому не стал выносить ее в FormRequest
    // Так же, в контроллере есть логика валидации {modelName},  который используется
    // как строка, на основе которой вызывается класс
    public function store2(Request $request, string $modelName, string $id)
    {
        $modelFullName = 'App\Models\\' . $modelName;

        if (! in_array($modelFullName, Comment::COMMENTABLE_MODELS)) {
            abort(404);
        }

        $commentableModel = $modelFullName::findOrFail($id);
        $validated = $request->validate(['body' => ['bail', 'required'],]);
        $commentableModel->comments()->create($validated);

        return back()->with('status', 'create');
    }
}
