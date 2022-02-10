<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('class_id');
            $table->string('class_name');
            $table->string('class_code')->unique();
            $table->string('level');
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable(); //unsignedBigInt
            // $table->unsignedBigInteger('subject_id')->nullable();;
            $table->integer('day_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->tinyInteger('status')->default(1);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties');
            // $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('classes');
    }
}
