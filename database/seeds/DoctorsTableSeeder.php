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
        DB::table('doctors')->insert(['firstname'=>'Kenneth', 'lastname'=>'Reed']);
        DB::table('doctors')->insert(['firstname'=>'Leslie', 'lastname'=>'Hines']);
        DB::table('doctors')->insert(['firstname'=>'Todd', 'lastname'=>'Wagner']);
        DB::table('doctors')->insert(['firstname'=>'Marisa', 'lastname'=>'Singh']);
        DB::table('doctors')->insert(['firstname'=>'Lawrence', 'lastname'=>'Chen']);
    }
}
