<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('registered_date')->nullable();
            $table->string('fullname');            
            $table->string('slug');
            $table->string('image')->nullable();
            $table->enum('gender',['male','female']);
            $table->enum('roles',['teacher','staff']);
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->date('stop_date')->nullable();
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
        Schema::dropIfExists('officers');
    }
}
