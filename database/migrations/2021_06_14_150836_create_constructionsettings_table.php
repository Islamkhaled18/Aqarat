<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructionsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructionsettings', function (Blueprint $table) {
            $table->id();
            $table->string('explain_quote');
            $table->string('construction_image')->nullable();
            $table->string('infrastructure_image')->nullable();
            $table->string('road_image')->nullable();
            $table->string('interiordesign_image')->nullable();
            $table->string('feature_one');
            $table->string('feature_two');
            $table->string('feature_three');
            $table->string('feature_four');
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
        Schema::dropIfExists('constructionsettings');
    }
}
