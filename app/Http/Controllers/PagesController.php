<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class PagesController extends Controller
{
    public function index() {

        //$meals = Meal::all();

        return view('pages.index');
    }
}
