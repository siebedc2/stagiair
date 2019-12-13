<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyNameToInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->string('companyName');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('internships', function (Blueprint $table) {
        });
    }
}
