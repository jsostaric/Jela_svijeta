<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=1; $i < 7 ; $i++) { 
            //$title = $faker->unique()->getTags;
            $slug = 'ingredient-'. $i;

            DB::table('ingredients')->insert([
                'slug' => $slug
            ]);

            foreach(['en', 'hr'] as $locale) {     
               if($locale == 'en') {
                $faker = Faker::create();
                $faker->addProvider(new \Faker\Provider\Food($faker));

                $title = $faker->unique()->getIngredients;

               } elseif($locale == 'hr') {
                $faker = Faker::create('hr_HR');
                $faker->addProvider(new \Faker\Provider\hr_HR\Food($faker));

                $title = $faker->unique()->getIngredients;
               }
                DB::table('ingredient_translations')->insert([
                    'ingredient_id' => $i,
                    'locale' => $locale,
                    'title' => $title
                ]);
            }            
        }
    }
}
