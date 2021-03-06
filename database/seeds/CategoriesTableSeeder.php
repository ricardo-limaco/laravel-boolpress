<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Films','Series','Books','Others'];

        foreach ($categories as $category){
            $newCategory = new Category();
            $newCategory->name= $category;
            $newCategory->save();
        }
    }
}
