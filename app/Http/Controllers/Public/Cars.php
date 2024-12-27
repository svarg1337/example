<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class Cars extends Controller
{
    public function index()
    {
        $bodyTypes = config('app-car.body');
        $cars = Car::with('brand.country', 'tags')->ofActive()->latest()->get();

        return view('public.cars.index', compact('cars', 'bodyTypes'));
    }
}
