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
        DB::table('patients')->insert(['firstname'=>'Jimmy', 'lastname'=>'Lee', 'address'=>'7 North Gyle Drive, Huddersfield', 'postcode'=>'HD95JF', 'mobile_number'=>'07003851252', 'gender'=>'male', 'doctor_id'=>'1', 'dob'=>'1952-10-30']);
        DB::table('patients')->insert(['firstname'=>'Skyla', 'lastname'=>'Hammond', 'address'=>'577 Inglemire Lane, Huddersfield', 'postcode'=>'HD74LL', 'mobile_number'=>'07923332104', 'gender'=>'female', 'doctor_id'=>'2', 'dob'=>'1959-11-20']);
        DB::table('patients')->insert(['firstname'=>'Francessca', 'lastname'=>'King', 'address'=>'60 High St, Huddersfield', 'postcode'=>'HD88DP', 'mobile_number'=>'07920124566', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1973-07-17']);
        DB::table('patients')->insert(['firstname'=>'Gracie', 'lastname'=>'Marshall', 'address'=>'3 Stoneleigh Park Rd, Huddersfield', 'postcode'=>'HD13SJ', 'mobile_number'=>'07865863038', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1983-05-09']);
        DB::table('patients')->insert(['firstname'=>'Koen', 'lastname'=>'Leon', 'address'=>'2 Venture Rd Huddersfield', 'postcode'=>'HD22AW', 'mobile_number'=>'07831974446', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1986-09-27']);
        DB::table('patients')->insert(['firstname'=>'Rylie', 'lastname'=>'Andersen', 'address'=>'Unit 21, The Metro Centre, Huddersfield', 'postcode'=>'HD96HQ', 'mobile_number'=>'07025229750', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1955-03-29']);
        DB::table('patients')->insert(['firstname'=>'Aliana', 'lastname'=>'West', 'address'=>'113 Long Knowle Lane, Huddersfield', 'postcode'=>'HD34EX', 'mobile_number'=>'07833951459', 'gender'=>'female', 'doctor_id'=>'2', 'dob'=>'1959-04-27']);
        DB::table('patients')->insert(['firstname'=>'Haleigh', 'lastname'=>'Ali', 'address'=>'6 Wassage Way, Huddersfield', 'postcode'=>'HD34QG', 'mobile_number'=>'07022984156', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1963-04-27']);
        DB::table('patients')->insert(['firstname'=>'Harry', 'lastname'=>'Cadwell', 'address'=>'14-17, Astwood Mews, Huddersfield', 'postcode'=>'HD74DF', 'mobile_number'=>'07066759617', 'gender'=>'male', 'doctor_id'=>'4', 'dob'=>'1972-04-18']);
        DB::table('patients')->insert(['firstname'=>'Ryan', 'lastname'=>'Brook', 'address'=>'25 High St, Huddersfield', 'postcode'=>'HD19DJ', 'mobile_number'=>'07059407001', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1988-02-22']);
        DB::table('patients')->insert(['firstname'=>'Vincent', 'lastname'=>'Vance', 'address'=>'89 Alleyn Park Huddersfield', 'postcode'=>'HD62RG', 'mobile_number'=>'07022585371', 'gender'=>'male', 'doctor_id'=>'1', 'dob'=>'1952-10-31']);
        DB::table('patients')->insert(['firstname'=>'Alex', 'lastname'=>'Mooney', 'address'=>'82 Bradford Road, Huddersfield', 'postcode'=>'HD14LN', 'mobile_number'=>'07969547696', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-11-21']);
        DB::table('patients')->insert(['firstname'=>'Leanna', 'lastname'=>'Faulkner', 'address'=>'600 Leeds & Bradford Road,  Huddersfield', 'postcode'=>'HD21BQ', 'mobile_number'=>'07920419457', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1973-07-18']);
        DB::table('patients')->insert(['firstname'=>'Karl', 'lastname'=>'Meyer', 'address'=>'Unit 20, Mardon Park,  Huddersfield', 'postcode'=>'HD33ZA', 'mobile_number'=>'07920419457', 'gender'=>'male', 'doctor_id'=>'4', 'dob'=>'1983-05-10']);
        DB::table('patients')->insert(['firstname'=>'Makai', 'lastname'=>'Small', 'address'=>'Unit 25, 210, Springburn Way,  Huddersfield', 'postcode'=>'HD96RD', 'mobile_number'=>'07778610368', 'gender'=>'female', 'doctor_id'=>'5', 'dob'=>'1986-09-28']);
    }
}
