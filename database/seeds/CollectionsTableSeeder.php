<?php

use App\Collection;
use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'name' => 'Rocky I Series',
            'description' => 'Allow natural light in while enjoying moderate privacy. These styles are sleek, beautiful and perfect for any decor. A good solution for reducing glare. Choose from over 50 materials.',
            'image_path'  => '/img/collections/light-filtering.jpg',
            'treatment_id' => 1
        ]);

        Collection::create([
            'name' => 'Rocky II Series',
            'description' => 'Light interfering with your sleep? Here\'s an affordable solution - 37 beautiful blackout materials, perfect for blocking natural light from filling your room.',
            'image_path'  => '/img/collections/blackout.jpg',
            'treatment_id' => 1
        ]);

        Collection::create([
            'name' => 'Rocky III Series',
            'description' => 'Our sleek, modern rollers paired with our exclusive naturals collection. Choose from 49 eco-friendly looks sourced from low-impact materials.',
            'image_path'  => '/img/collections/naturals.jpg',
            'treatment_id' => 1
        ]);

        Collection::create([
            'name' => 'Galaxy Series',
            'description' => 'Protect your home from sun damage and harmful UV rays while preserving your view. Choose from 4 levels of transparency each available in 9 colors.',
            'image_path'  => '/img/collections/basic.jpg',
            'treatment_id' => 2
        ]);

        Collection::create([
            'name' => 'Losa Series',
            'description' => 'A stylish way to ward off sun damage. All the benefits of our basics but with a touch of flair. Over 25 beautiful looks spanning 7 exclusive collections.',
            'image_path'  => '/img/collections/designer.jpg',
            'treatment_id' => 2
        ]);

        Collection::create([
            'name' => 'Sara Series',
            'description' => 'Chilewich has put together an exclusive collection of 21 beautiful weaves for our solar shades. Add a modern, sophisticated accent to any interior. ',
            'image_path'  => '/img/collections/chilewich.jpg',
            'treatment_id' => 2
        ]);
    }
}
