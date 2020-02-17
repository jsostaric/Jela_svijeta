<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i=1; $i < 50 ; $i++) {
            //$title = $faker->unique()->getTags;
            $slug = 'tag-'. $i;

            DB::table('tags')->insert([
                'slug' => $slug
            ]);

            foreach(['en', 'hr'] as $locale) {
               if($locale == 'en') {
                $faker = Faker::create();
                $faker->addProvider(new \Faker\Provider\Food($faker));

                // $title = $faker->unique()->getTags;
                $title = "Name of tag number " . $i;

               } elseif($locale == 'hr') {
                $faker = Faker::create('hr_HR');
                $faker->addProvider(new \Faker\Provider\hr_HR\Food($faker));

                // $title = $faker->unique()->getTags;
                $title = "Naslov taga " . $i;
               }
                DB::table('tag_translations')->insert([
                    'tag_id' => $i,
                    'locale' => $locale,
                    'title' => $title
                ]);
            }
        }
    }
}
