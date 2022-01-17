<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tester', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            
        });

        DB::table("tester")
            ->insert([
                ["name" =>"Jose Manuel"],
                ["name" =>"Pablo"]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tester');
    }
}
