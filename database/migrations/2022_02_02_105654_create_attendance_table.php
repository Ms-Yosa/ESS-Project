<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_students', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status');
            $table->longText('description');
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
        Schema::dropIfExists('attendance_students');
    }
}
