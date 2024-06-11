<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);

        Category::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
        ]);

        Category::create([
            'name' => 'Python',
            'slug' => 'python',
        ]);

        Category::create([
            'name' => 'Java',
            'slug' => 'java',
        ]);
    }
}