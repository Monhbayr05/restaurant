<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::query()->orderBy('id', 'desc')->get();

        return view('admin.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        return view('admin.restaurant.create');
    }

    public function store()
    {
        
    }
}


