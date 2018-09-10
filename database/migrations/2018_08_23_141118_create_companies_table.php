<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->nullable;
            $table->string('cover_image1');
            $table->string('cover_image2');
            $table->string('cover_image3');
            $table->string('title');
            $table->text('description');
            $table->text('job_content');
            $table->string('place');
            $table->string('relate');
            $table->string('role');
            $table->string('salary');
            $table->text('welfare');
            $table->string('time');
            $table->text('skill');
            $table->text('apply_way');
            $table->string('company_name');
            $table->string('company_place');
            $table->string('foundation');
            $table->string('employee');
            $table->string('company_type');
            $table->text('company_content');
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
        Schema::dropIfExists('companies');
    }
}
