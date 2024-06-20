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
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Python',
            'slug' => 'python',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Java',
            'slug' => 'java',
            'color' => 'teal'
        ]);
    }
}
