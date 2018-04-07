<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->date('registered_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('fullname'); 
            $table->string('slug');
            $table->string('nickname');
            $table->enum('gender',['male', 'female']);
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('job')->nullable();
            $table->decimal('tuition', 6,0)->nullable();
            $table->decimal('infrastructure_fee',7,0)->nullable();            
            $table->decimal('uniform_fee',7,0)->nullable();
            $table->integer('class_group_id')->unsigned();
            $table->string('image')->nullable();            
            $table->date('stop_date')->nullable();            
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('students');
    }
}
