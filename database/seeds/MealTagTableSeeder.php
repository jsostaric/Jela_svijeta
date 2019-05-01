<?php

use Illuminate\Database\Seeder;

class MealTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <7 ; $i++) { 
            DB::table('meal_tag')->insert([
                'meal_id' => rand(1,6),
                'tag_id' => rand(1,6)
            ]);
        }
    }
}
