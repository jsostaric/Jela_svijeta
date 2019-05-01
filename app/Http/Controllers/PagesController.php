<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class PagesController extends Controller
{
    public function index() {

        //$meals = Meal::all();
        $meals = Meal::paginate(5);

        return view('pages.index')->withMeals($meals);
    }
}
