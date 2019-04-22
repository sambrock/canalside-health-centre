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
        DB::table('patients')->insert(['firstname'=>'Lyla', 'lastname'=>'Field', 'address'=>'24 Ogden Rd, Huddersfield', 'postcode'=>'HD58AG', 'mobile_number'=>'07003851252', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1952-10-31']);
        DB::table('patients')->insert(['firstname'=>'Amalia', 'lastname'=>'Parsons', 'address'=>'7a, Flush Rd, Huddersfield', 'postcode'=>'HD14LR', 'mobile_number'=>'07923332104', 'gender'=>'female', 'doctor_id'=>'2', 'dob'=>'1959-11-21']);
        DB::table('patients')->insert(['firstname'=>'Aaryan', 'lastname'=>'Welch', 'address'=>'22 Highfield Close, Huddersfield', 'postcode'=>'HD34AZ', 'mobile_number'=>'07920124566', 'gender'=>'male', 'doctor_id'=>'3', 'dob'=>'1973-07-18']);
        DB::table('patients')->insert(['firstname'=>'Kaison', 'lastname'=>'Chase', 'address'=>'7 Millstream, Huddersfield', 'postcode'=>'HD94AG', 'mobile_number'=>'07865863038', 'gender'=>'male', 'doctor_id'=>'4', 'dob'=>'1983-05-10']);
        DB::table('patients')->insert(['firstname'=>'Harun ', 'lastname'=>'Andersen', 'address'=>'61 Low Craigends, Huddersfield', 'postcode'=>'HD75DW', 'mobile_number'=>'07831974446', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1986-09-28']);
        DB::table('patients')->insert(['firstname'=>'Tai', 'lastname'=>'Munoz', 'address'=>'3 Calvert Rd, Huddersfield', 'postcode'=>'HD80NA', 'mobile_number'=>'07025229750', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1955-03-30']);
        DB::table('patients')->insert(['firstname'=>'Geraldine', 'lastname'=>'Sutherland', 'address'=>'2 Eltonia Croft, Huddersfield', 'postcode'=>'HD80AD', 'mobile_number'=>'07833951459', 'gender'=>'female', 'doctor_id'=>'2', 'dob'=>'1959-04-28']);
        DB::table('patients')->insert(['firstname'=>'Yvie', 'lastname'=>'Walter', 'address'=>'2 Bishops House, Huddersfield', 'postcode'=>'HD76EZ', 'mobile_number'=>'07022984156', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1963-04-28']);
        DB::table('patients')->insert(['firstname'=>'Alton', 'lastname'=>'Schultz', 'address'=>'96 Bridwell Rd, Huddersfield', 'postcode'=>'HD88NG', 'mobile_number'=>'07066759617', 'gender'=>'male', 'doctor_id'=>'4', 'dob'=>'1972-04-19']);
        DB::table('patients')->insert(['firstname'=>'Craig', 'lastname'=>'Rich', 'address'=>'96 Main St, Huddersfield', 'postcode'=>'HD15PB', 'mobile_number'=>'07059407001', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1988-02-23']);
        DB::table('patients')->insert(['firstname'=>'Rich', 'lastname'=>'Evans', 'address'=>'Grover House, 40, Princess St, Huddersfield', 'postcode'=>'HD46SY', 'mobile_number'=>'07022585371', 'gender'=>'male', 'doctor_id'=>'1', 'dob'=>'1952-10-27']);
        DB::table('patients')->insert(['firstname'=>'Ashraf', 'lastname'=>'Dixon', 'address'=>'Woodcraft Buildings, Huddersfield', 'postcode'=>'HD89LS', 'mobile_number'=>'07969547696', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-11-22']);
        DB::table('patients')->insert(['firstname'=>'Edmund', 'lastname'=>'Mischa', 'address'=>'369 Green Lane, Huddersfield', 'postcode'=>'HD46RP', 'mobile_number'=>'07920419457', 'gender'=>'male', 'doctor_id'=>'3', 'dob'=>'1973-07-19']);
        DB::table('patients')->insert(['firstname'=>'Dru', 'lastname'=>'Forster', 'address'=>'Baltic Business Centre, Huddersfield', 'postcode'=>'HD45RS', 'mobile_number'=>'07920419457', 'gender'=>'male', 'doctor_id'=>'4', 'dob'=>'1983-05-11']);
        DB::table('patients')->insert(['firstname'=>'Nieve', 'lastname'=>'Levy', 'address'=>'Unit 2, Pool Court, Pasture Road, Huddersfield', 'postcode'=>'HD58UR', 'mobile_number'=>'07778610368', 'gender'=>'female', 'doctor_id'=>'5', 'dob'=>'1986-09-29']);
        DB::table('patients')->insert(['firstname'=>'Abbigail', 'lastname'=>'Lowry', 'address'=>'5 Dene Terrace, Huddersfield', 'postcode'=>'HD96QH', 'mobile_number'=>'07003851252', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1952-10-27']);
        DB::table('patients')->insert(['firstname'=>'Fergus', 'lastname'=>'Fernandez', 'address'=>'51 Robertson St, Huddersfield', 'postcode'=>'HD34GB', 'mobile_number'=>'07923332104', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-11-22']);
        DB::table('patients')->insert(['firstname'=>'Dione', 'lastname'=>'Lyon', 'address'=>'Fortune House, 88 Queen Street, Huddersfield', 'postcode'=>'HD61BL', 'mobile_number'=>'07920124566', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1973-07-19']);
        DB::table('patients')->insert(['firstname'=>'Megan', 'lastname'=>'Blackmore', 'address'=>'Unit 10, Hillfoot Industrial Estate, Huddersfield', 'postcode'=>'HD46XA', 'mobile_number'=>'07865863038', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1983-05-11']);
        DB::table('patients')->insert(['firstname'=>'Morgan', 'lastname'=>'Curtis', 'address'=>'65 Surrey St, Huddersfield', 'postcode'=>'HD14EU', 'mobile_number'=>'07831974446', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1986-09-29']);
        DB::table('patients')->insert(['firstname'=>'Tiernan', 'lastname'=>'Nunez', 'address'=>'78-82, Pinstone St, Huddersfield', 'postcode'=>'HD91RN', 'mobile_number'=>'07025229750', 'gender'=>'male', 'doctor_id'=>'1', 'dob'=>'1955-03-31']);
        DB::table('patients')->insert(['firstname'=>'Vivek', 'lastname'=>'Osborne', 'address'=>'40 Charter Square, Huddersfield', 'postcode'=>'HD63LE', 'mobile_number'=>'07833951459', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-04-29']);
        DB::table('patients')->insert(['firstname'=>'Viktoria', 'lastname'=>'Weber', 'address'=>'119 Eyre St, Sheffield, Huddersfield', 'postcode'=>'HD80NR', 'mobile_number'=>'07022984156', 'gender'=>'female', 'doctor_id'=>'3', 'dob'=>'1963-04-29']);
        DB::table('patients')->insert(['firstname'=>'Alby', 'lastname'=>'Waller', 'address'=>'72 Arundel St, Huddersfield', 'postcode'=>'HD14SE', 'mobile_number'=>'07066759617', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1972-04-20']);
        DB::table('patients')->insert(['firstname'=>'Brandon', 'lastname'=>'Fritz', 'address'=>'60, Charter Row, Huddersfield', 'postcode'=>'HD46XP', 'mobile_number'=>'07059407001', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1988-02-24']);
        DB::table('patients')->insert(['firstname'=>'Wren', 'lastname'=>'Sparks', 'address'=>'The Furnivale Building, 153 Arundel St, Huddersfield', 'postcode'=>'HD95PS', 'mobile_number'=>'07022585371', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1952-10-15']);
        DB::table('patients')->insert(['firstname'=>'Jayson', 'lastname'=>'Bernal', 'address'=>'4, Carver St, Huddersfield', 'postcode'=>'HD75HZ', 'mobile_number'=>'07969547696', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-11-23']);
        DB::table('patients')->insert(['firstname'=>'Jaime', 'lastname'=>'Buckley', 'address'=>'117 Norfolk St, Huddersfield', 'postcode'=>'HD89ET', 'mobile_number'=>'07920419457', 'gender'=>'male', 'doctor_id'=>'3', 'dob'=>'1973-07-20']);
        DB::table('patients')->insert(['firstname'=>'Aleah', 'lastname'=>'Mclellan', 'address'=>'Church St, Huddersfield', 'postcode'=>'HD89JS', 'mobile_number'=>'07920419457', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1983-05-12']);
        DB::table('patients')->insert(['firstname'=>'Wren', 'lastname'=>'Sparks', 'address'=>'10, Carver St, Huddersfield', 'postcode'=>'HD16QE', 'mobile_number'=>'07778610368', 'gender'=>'female', 'doctor_id'=>'5', 'dob'=>'1986-09-30']);
        DB::table('patients')->insert(['firstname'=>'Lola', 'lastname'=>'Barett', 'address'=>'4th floor, Central Library, Huddersfield', 'postcode'=>'HD58QJ', 'mobile_number'=>'07003851252', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1952-10-27']);
        DB::table('patients')->insert(['firstname'=>'Francesco', 'lastname'=>'Faulkner', 'address'=>'12 Orchard Square, Huddersfield', 'postcode'=>'HD97EF', 'mobile_number'=>'07923332104', 'gender'=>'female', 'doctor_id'=>'2', 'dob'=>'1959-11-23']);
        DB::table('patients')->insert(['firstname'=>'Arbaaz', 'lastname'=>'Joseph', 'address'=>'3-7, Sidney St, Huddersfield', 'postcode'=>'HD97JX', 'mobile_number'=>'07920124566', 'gender'=>'male', 'doctor_id'=>'3', 'dob'=>'1973-07-20']);
        DB::table('patients')->insert(['firstname'=>'Tayler', 'lastname'=>'Carpenter', 'address'=>'15, Paternoster Row, Huddersfield', 'postcode'=>'HD22SG', 'mobile_number'=>'07865863038', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1983-05-12']);
        DB::table('patients')->insert(['firstname'=>'Teo', 'lastname'=>'Mcloughlin', 'address'=>'3, Piccadilly Place, Huddersfield', 'postcode'=>'HD91HG', 'mobile_number'=>'07831974446', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1986-09-30']);
        DB::table('patients')->insert(['firstname'=>'Iosif', 'lastname'=>'Nelson', 'address'=>'101 Portland St, Huddersfield', 'postcode'=>'HD21RS', 'mobile_number'=>'07025229750', 'gender'=>'female', 'doctor_id'=>'1', 'dob'=>'1955-03-29']);
        DB::table('patients')->insert(['firstname'=>'Shawn', 'lastname'=>'Beltran', 'address'=>'Imex House, 40, Princess St, Huddersfield', 'postcode'=>'HD63SG', 'mobile_number'=>'07833951459', 'gender'=>'male', 'doctor_id'=>'2', 'dob'=>'1959-04-30']);
        DB::table('patients')->insert(['firstname'=>'Herb', 'lastname'=>'Wharton', 'address'=>'60 Whitworth St, Huddersfield', 'postcode'=>'HD95AR', 'mobile_number'=>'07022984156', 'gender'=>'male', 'doctor_id'=>'3', 'dob'=>'1963-04-30']);
        DB::table('patients')->insert(['firstname'=>'Eva-Rose', 'lastname'=>'Mann', 'address'=>'79 Oxford St, Huddersfield', 'postcode'=>'HD50EF', 'mobile_number'=>'07066759617', 'gender'=>'female', 'doctor_id'=>'4', 'dob'=>'1972-04-21']);
        DB::table('patients')->insert(['firstname'=>'Mike', 'lastname'=>'Bauman', 'address'=>'33 Plinkett Drive, Huddersfield', 'postcode'=>'HD23FG', 'mobile_number'=>'07066759617', 'gender'=>'male', 'doctor_id'=>'5', 'dob'=>'1986-09-30']);

    }
}
