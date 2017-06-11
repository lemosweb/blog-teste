<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SubCategory::class, 20)->create();
    }
}
