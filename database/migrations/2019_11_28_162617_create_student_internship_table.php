<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInternshipTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('student_internship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // dit is voor een ManyToMany
            $table->integer('students_id')->unsigned();
            $table->integer('internships_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('student_internship');
    }
}
