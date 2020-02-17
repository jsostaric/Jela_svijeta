<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index() {

        $lang = app()->setLocale(request('lang') ?? 'en');

        $meals = Meal::query();

        $perPage = request('per_page') ?? 5;


        if(request('tags')){
            $meals = Meal::whereHas('tags', function(Builder $query){
                $query->where('tags.id', request('tags'));
            });
        }

        if(request('with')) {

            $meals->with(['tags','ingredients','category']);
        }

        $meals = $meals->paginate($perPage);

        return $meals;

    }
}
