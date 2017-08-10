<?php

use Illuminate\Database\Seeder;
use Domain\SubCategory\SubCategory;

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
