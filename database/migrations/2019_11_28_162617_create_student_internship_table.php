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
            $table->unsignedbigInteger('student_id')->index();
            $table->foreign('student_id')->references('id')
                ->on('students')
                ->onDelete('cascade');

            $table->unsignedbigInteger('internship_id')->index();
            $table->foreign('internship_id')->references('id')
                ->on('internships')
                ->onDelete('cascade');
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
