<?php

use App\Treatment;
use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Treatment::create([
            'name' => 'Roller Shades',
            'description' => 'A simple and elegant way to cover your windows. Both practical and stylish, roller shades are available in over 200 exclusive materials.'
        ]);

        Treatment::create([
            'name' => 'Solar Shades',
            'description' => 'Glare reduction and UV protection. Choose solar shades to make the sun a little more manageable. 80 eco-friendly materials available.'
        ]);

    }
}
