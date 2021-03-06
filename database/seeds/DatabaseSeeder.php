<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MealsTableSeeder::class);
        $this->call(IngredientMealTableSeeder::class);
        $this->call(MealTagTableSeeder::class);
    }
}
