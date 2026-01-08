<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Kopi', 'slug' => 'kopi', 'emoji' => '☕'],
            ['name' => 'Snack', 'slug' => 'snack', 'emoji' => '🥐'],
            ['name' => 'Non Kopi', 'slug' => 'nonkopi', 'emoji' => '🧃'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
