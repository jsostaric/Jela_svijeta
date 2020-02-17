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
        for ($i=1; $i < 25 ; $i++) {
            foreach(['en','hr'] as $locale){
                DB::table('ingredient_meal')->insert([
                    'ingredient_id' => rand(1,49),
                    'meal_id' => $i
                ]);
            }
        }
    }
}
