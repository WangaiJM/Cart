<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'Images/bag1.jpeg',
            'title' => 'Awesome Bag',
            'description' => 'Quality bags to brag about.',
            'price' => 2000
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag1.jpeg',
            'title' => 'Awesome Bag',
            'description' => 'A wonderful piece of art.',
            'price' => 2000
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag1.jpeg',
            'title' => 'Awesome Bag',
            'description' => 'A show of excellence',
            'price' => 2000
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag3.jpeg',
            'title' => 'Expensive Bag',
            'description' => 'A heavenly beauty',
            'price' => 1200
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag12.jpeg',
            'title' => 'Beautiful Bag',
            'description' => 'Angelic piece of art',
            'price' => 2500
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag13.jpeg',
            'title' => 'Cool Bag',
            'description' => 'Made for the pop',
            'price' => 2050
        ]);
        $product -> save();

        $product = new \App\Product([
            'imagePath' => 'Images/bag10.jpeg',
            'title' => 'Amazing Bag',
            'description' => 'Quality bags to brag about.',
            'price' => 2500
        ]);
        $product -> save();
    }
}
