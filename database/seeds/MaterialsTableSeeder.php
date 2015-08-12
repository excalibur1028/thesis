<?php

use App\Material;
use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'name' => 'w201 White',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/rocky-i-series/w201-white.jpg',
            'collection_id' => 1
        ]);

        Material::create([
            'name' => 'w202 Ivory',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/rocky-i-series/w202-ivory.jpg',
            'collection_id' => 1
        ]);

        Material::create([
            'name' => 'w203 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/rocky-i-series/w203-beige.jpg',
            'collection_id' => 1
        ]);

        Material::create([
            'name' => 'n101 White',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/rocky-ii-series/n101-white.jpg',
            'collection_id' => 2
        ]);

        Material::create([
            'name' => 'n102 Ivory',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/rocky-ii-series/n102-ivory.jpg',
            'collection_id' => 2
        ]);

        Material::create([
            'name' => 'n103 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/rocky-ii-series/n103-beige.jpg',
            'collection_id' => 2
        ]);

        Material::create([
            'name' => 's301 Ivory',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/rocky-iii-series/s301-ivory.jpg',
            'collection_id' => 3
        ]);

        Material::create([
            'name' => 's302 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/rocky-iii-series/s302-beige.jpg',
            'collection_id' => 3
        ]);

        Material::create([
            'name' => 's303 Brown',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/rocky-iii-series/s303-brown.jpg',
            'collection_id' => 3
        ]);


        /**
         * Solar Shades
         *
         */
        Material::create([
            'name' => 'lg02 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/galaxy-series/lg02-beige.jpg',
            'collection_id' => 4
        ]);

        Material::create([
            'name' => 'lg05 Two Tone Brown',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/galaxy-series/lg05-two-tone-brown.jpg',
            'collection_id' => 4
        ]);

        Material::create([
            'name' => 'lg06 Two Tone Gray',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/galaxy-series/lg06-two-tone-gray.jpg',
            'collection_id' => 4
        ]);

        Material::create([
            'name' => 'll01 White',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/losa-series/ll01-white.jpg',
            'collection_id' => 5
        ]);

        Material::create([
            'name' => 'll02 Ivory',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/losa-series/ll02-ivory.jpg',
            'collection_id' => 5
        ]);

        Material::create([
            'name' => 'll03 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/losa-series/ll03-beige.jpg',
            'collection_id' => 5
        ]);

        Material::create([
            'name' => 'ls01 Beige',
            'composition' => 'Polyester 100%',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias pariatur placeat aut hic. Qui fuga nesciunt voluptates ut, cum dolorem saepe autem, doloribus delectus facilis, odit ipsum nostrum culpa.',
            'image_path'  => '/img/materials/sara-series/ls01-beige.jpg',
            'collection_id' => 6
        ]);

        Material::create([
            'name' => 'ls02 Khaki',
            'composition' => 'Polyester 100%',
            'description' => 'Sunt placeat illo saepe molestias natus quis consectetur ducimus dolores voluptatem voluptas maxime reprehenderit earum voluptatum veniam eveniet beatae temporibus magnam repellendus nihil corporis, voluptate laboriosam.',
            'image_path'  => '/img/materials/sara-series/ls02-khaki.jpg',
            'collection_id' => 6
        ]);

        Material::create([
            'name' => 'ls03 Choco',
            'composition' => 'Polyester 100%',
            'description' => 'Suscipit consectetur, totam, neque, modi ratione accusamus nihil vero ducimus soluta amet saepe esse fuga! Officiis obcaecati sit cum placeat praesentium, dolor esse magnam corporis totam iste nisi explicabo amet.',
            'image_path'  => '/img/materials/sara-series/ls03-choco.jpg',
            'collection_id' => 6
        ]);
    }
}
