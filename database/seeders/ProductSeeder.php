<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $num_posts = 30;

        // Use a loop to create multiple users
        for ($i = 1; $i < $num_posts; $i++) {
        Product::create([
            'name' => "Test title $i",
            'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consequuntur vero facilis perspiciatis.",
          ]);
        }
    }
}
