<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
        'treatments',
        'collections',
        'materials',
    ];

    protected $seeders = [
        TreatmentsTableSeeder::class,
        CollectionsTableSeeder::class,
        MaterialsTableSeeder::class,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach($this->tables as $table)
        {
            DB::table($table)->truncate();
        }

        foreach($this->seeders as $seeder)
        {
            $this->call($seeder);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
