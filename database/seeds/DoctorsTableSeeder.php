<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert(['firstname'=>'Sally', 'lastname'=>'Smith']);
        DB::table('doctors')->insert(['firstname'=>'Andy', 'lastname'=>'Johnson']);
    }
}
