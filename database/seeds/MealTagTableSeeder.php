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
        for ($i=1; $i <25 ; $i++) {
            DB::table('meal_tag')->insert([
                'meal_id' => $i,
                'tag_id' => rand(1,6)
            ]);
        }
    }
}
