<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_contents', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('about_us_image');
            $table->string('for_planner_image');
            $table->longText('for_planner_content');
            $table->string('for_vendor_image');
            $table->longText('for_vendor_content');
            $table->string('step_one_title');
            $table->longText('step_one_content');
            $table->string('step_two_title');
            $table->longText('step_two_content');
            $table->string('step_three_title');
            $table->longText('step_three_content');
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
        Schema::dropIfExists('about_us_contents');
    }
}
