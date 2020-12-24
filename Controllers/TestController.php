<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Episode;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function movie()
    {
        $category = Category::all();
        $movie = Movie::all();
        return view('movie',compact('movie'),compact('category'));
    }

    public function episode(Category $category)
    {
        $movie = Movie::all();
        return view('based',compact('category'),compact('movie'));
    }

    public function show(Movie $movie)
    {
        $episode = Episode::all();
        return view('detail',compact('movie'),compact('episode'));
    }
}