<?php

use Illuminate\Database\Seeder;

class IngredientMealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <7 ; $i++) { 
            DB::table('ingredient_meal')->insert([
                'ingredient_id' => rand(1,6),
                'meal_id' => rand(1,6)
            ]);
        }
    }
}
