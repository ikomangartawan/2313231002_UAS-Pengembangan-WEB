<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusSeeder extends Seeder
{
    public function run()
    {
        $menus = [

            // Kopi
            ['name' => 'Espresso', 'price' => 18000, 'category_id' => 1],
            ['name' => 'Latte', 'price' => 22000, 'category_id' => 1],
            ['name' => 'Cappuccino', 'price' => 24000, 'category_id' => 1],
            ['name' => 'Americano', 'price' => 20000, 'category_id' => 1],
            ['name' => 'Mocha', 'price' => 25000, 'category_id' => 1],
            ['name' => 'Flat White', 'price' => 23000, 'category_id' => 1],
            ['name' => 'Macchiato', 'price' => 21000, 'category_id' => 1],
            ['name' => 'Affogato', 'price' => 27000, 'category_id' => 1],
            ['name' => 'Irish Coffee', 'price' => 30000, 'category_id' => 1],
            ['name' => 'Kopi Tubruk', 'price' => 15000, 'category_id' => 1],

            // Snack
            ['name' => 'Croissant', 'price' => 15000, 'category_id' => 2],
            ['name' => 'Donut', 'price' => 12000, 'category_id' => 2],
            ['name' => 'Cake', 'price' => 20000, 'category_id' => 2],
            ['name' => 'Muffin', 'price' => 18000, 'category_id' => 2],
            ['name' => 'Brownies', 'price' => 22000, 'category_id' => 2],
            ['name' => 'Pancake', 'price' => 25000, 'category_id' => 2],
            ['name' => 'Waffle', 'price' => 23000, 'category_id' => 2],
            ['name' => 'Cheesecake', 'price' => 27000, 'category_id' => 2],
            ['name' => 'Macaron', 'price' => 20000, 'category_id' => 2],
            ['name' => 'Tart', 'price' => 24000, 'category_id' => 2],

            // Non Kopi
            ['name' => 'Chocolate', 'price' => 20000, 'category_id' => 3],
            ['name' => 'Matcha Latte', 'price' => 22000, 'category_id' => 3],
            ['name' => 'Teh Tarik', 'price' => 18000, 'category_id' => 3],
            ['name' => 'Jus Jeruk', 'price' => 15000, 'category_id' => 3],
            ['name' => 'Jus Alpukat', 'price' => 20000, 'category_id' => 3],
            ['name' => 'Smoothie Berry', 'price' => 25000, 'category_id' => 3],
            ['name' => 'Lemon Tea', 'price' => 18000, 'category_id' => 3],
            ['name' => 'Milkshake Cokelat', 'price' => 22000, 'category_id' => 3],
            ['name' => 'Milkshake Vanila', 'price' => 22000, 'category_id' => 3],
            ['name' => 'Es Teh Manis', 'price' => 12000, 'category_id' => 3],
        ];

        foreach ($menus as $menu) {
            Menu::updateOrCreate(
                ['name' => $menu['name'], 'category_id' => $menu['category_id']],
                $menu
            );
        }
    }
}
