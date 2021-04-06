<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('admin');
            $table->string('fullname', 50);
            $table->string('surname', 50);
            $table->integer('nationalid');
            $table->string('speciality', 50);
            $table->string('email', 50);
            $table->integer('age');
            $table->string('guardianfname', 50);
            $table->integer('guarrdian_nationalid')->nullable();
            $table->integer('guardian_mobile')->nullable();


            $table->timestamps();
            $table->primary(array('id', 'admin'));

        });
        DB::statement('ALTER TABLE students MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
