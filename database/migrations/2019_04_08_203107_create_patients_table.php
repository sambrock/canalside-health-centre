<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('address', 100);
            $table->string('postcode', 9);
            $table->decimal('mobile_number', 11, 0);
            $table->string('gender', 6);
            $table->date('dob');
            $table->unsignedInteger('doctor_id');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE patients AUTO_INCREMENT = 1001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
