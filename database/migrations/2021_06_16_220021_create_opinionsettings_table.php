<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinionsettings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_one_name');
            $table->string('customer_one_job');
            $table->longText('customer_one_opinion');
            $table->string('customer_two_name');
            $table->string('customer_two_job');
            $table->longText('customer_two_opinion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinionsettings');
    }
}
