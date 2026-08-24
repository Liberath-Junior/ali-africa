<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate(
            ['name' => 'Soft Drinks'],
            ['is_active' => true]
        );

        Category::updateOrCreate(
            ['name' => 'Liquors'],
            ['is_active' => true]
        );

        Category::updateOrCreate(
            ['name' => 'Wine'],
            ['is_active' => true]
        );
    }
}
