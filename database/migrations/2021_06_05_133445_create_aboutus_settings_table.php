<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('aboutus_headertext');
            $table->longText('aboutus_paragraphtext');
            $table->string('page_main_image');
            $table->integer('number_experience');
            $table->string('page_quote_image');
            $table->longText('quote_headertaxt');
            $table->longText('quote_paragraphtext');
            $table->string('page_container_image');
            $table->longText('reason_one');
            $table->longText('explain_reason_one');
            $table->longText('reason_two');
            $table->longText('explain_reason_two');
            $table->longText('reason_three');
            $table->longText('explain_reason_three');
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
        Schema::dropIfExists('aboutus_settings');
    }
}
