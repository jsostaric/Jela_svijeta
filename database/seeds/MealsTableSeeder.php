<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        for ($i=1; $i < 25 ; $i++) {
            //$title = $faker->unique()->getTags;

            $categoryId = rand(0,6);

            DB::table('meals')->insert([
                'status' => rand(0,1) ? 'created' : 'deleted',
                'category_id' => ($categoryId == 0) ? null : $categoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => ('status' == 'deleted') ? now() : null
            ]);

            foreach(['en', 'hr'] as $locale) {
               if($locale == 'en') {
                $faker = Faker::create();
                $faker->addProvider(new \Faker\Provider\Food($faker));

                // $title = $faker->unique()->finishedMeal;
                // $description = $faker->unique()->getDescriptions;
                $title = 'Name of ' . $i . '. meal';
                $description = 'This is description of ' . $i . '. meal';

               } elseif($locale == 'hr') {
                $faker = Faker::create('hr_HR');
                $faker->addProvider(new \Faker\Provider\hr_HR\Food($faker));

                // $title = $faker->unique()->finishedMeal;
                // $description = $faker->unique()->getDescriptions;
                $title = "Ovo je naslov " . $i . '. jela';
                $description = "Ovo je opis " . $i . '. jela';
               }
                DB::table('meal_translations')->insert([
                    'meal_id' => $i,
                    'locale' => $locale,
                    'title' => $title,
                    'description' => $description
                ]);
            }
        }
    }

}
