<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert(['firstname'=>'Sally', 'lastname'=>'Smith', 'address'=>'123 Block Road, Huddersfield', 'postcode'=>'hd13sd', 'mobile_number'=>'01234567890', 'gender'=>'female']);
        DB::table('patients')->insert(['firstname'=>'John', 'lastname'=>'Bradley', 'address'=>'123 Cheedle Hill, Huddersfield', 'postcode'=>'hd32fh', 'mobile_number'=>'01234567890', 'gender'=>'male']);
        DB::table('patients')->insert(['firstname'=>'Harry', 'lastname'=>'Plinkett', 'address'=>'231 Corner Avenue, Huddersfield', 'postcode'=>'hd45gf', 'mobile_number'=>'01234567890', 'gender'=>'male']);
    }
}
