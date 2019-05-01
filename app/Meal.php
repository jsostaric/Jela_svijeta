<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Dimsav\Translatable\Translatable;

class Meal extends Model
{
    use SoftDeletes;
    use Translatable;

    public $translatedAttributes = ['title', 'description'];

    public function categories() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }
}
