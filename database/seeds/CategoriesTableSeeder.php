<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        $categoris = [
            'mobail', 'bick', 'flate', 'shoping',
        ];

        foreach($categoris as $category){
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }

    }
}
