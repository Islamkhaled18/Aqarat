<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('contact_email');
            $table->string('contact_number');
            $table->integer('contact_number_second')->default(123);
            $table->string('company_address');
            $table->longText('company_map')->nullable();
            $table->string('website_image')->default('slider_bg.png');
            $table->string('company_facebook_account');
            $table->string('company_instagram_account');
            $table->string('company_description');
            $table->string('company_key_words');
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
        Schema::dropIfExists('sitesettings');
    }
}
