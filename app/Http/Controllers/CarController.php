<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::withTrashed()->get();
        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function update(Request $request,Car $car)
    {
        $car->release = $request->release;
        return $car->save();
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->model = $request->model;
        $car->release = $request->release;
        return $car->save();
    }

    public function destroy(Car $car)
    {
        return $car->delete();
    }
}
