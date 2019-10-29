<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobOffer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('companyName');
            $table->string('title');
            $table->text('description');
            $table->text('requirements');
            $table->text('offer');
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobOffer');
    }
}
