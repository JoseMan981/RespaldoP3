<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('Userid');
            $table->timestamps();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email');
            $table->boolean('IsActive');
            $table->boolean('IsAdmin');
            $table->string('Name_Group');
            $table->string('IATA');
            $table->string('Agency_Id');
            $table->string('Agency_Name');
            $table->string('Salesforce_id');
            $table->string('AMBT_Id');
            $table->Integer('Created_By');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
