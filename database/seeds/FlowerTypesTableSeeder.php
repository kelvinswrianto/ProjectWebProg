<?php

use Illuminate\Database\Seeder;

class FlowerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('flower_types')->insert([
            ['flower_types' => 'Rose'],
            ['flower_types' => 'Azalea'],
            ['flower_types' => 'Lily']
        ]);
    }
}
