<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_call');
            $table->string('gender');
            $table->string('tel')->unique();
            $table->string('birthday')->nullable;
            $table->string('university_name')->nullable;
            $table->string('university_degree')->nullable;
            $table->string('university_date')->nullable;
            $table->string('master_university')->nullable;
            $table->string('master_degree')->nullable;
            $table->string('master_date')->nullable;
            $table->string('company_name')->nullable;
            $table->string('position')->nullable;
            $table->string('period')->nullable;
            $table->string('company_name2')->nullable;
            $table->string('position2')->nullable;
            $table->string('period2')->nullable;
            $table->string('role')->nullable;
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
