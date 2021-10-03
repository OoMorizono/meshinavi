<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;


use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $params = $request->query();
        $restaurants = Restaurant::search($params)->paginate(10);

        $restaurants->appends(compact('name', 'category'));
        return view('restaurants.index', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        $zoom = 15;
        return view('restaurants.show', compact('restaurant', 'zoom'));
    }
}
