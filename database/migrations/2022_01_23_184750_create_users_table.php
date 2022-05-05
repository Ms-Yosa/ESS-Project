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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
            $table->string('religion');
            $table->string('student_bloodtype');
            $table->string('guardian');
            $table->string('contact_number');
            $table->string('relation');
            $table->string('guardian_bloodtype');
            $table->string('address');
            $table->string('surname');
            $table->string('middle_name')->nullable();
            $table->string('guardian_surname');
            $table->string('guardian_middle_name')->nullable();
            $table->string('birth_year');
            $table->string('birth_month');
            $table->string('birth_day');
            $table->boolean('status');
            $table->unsignedBigInteger('class_id')->nullable(); //unsignedBigInt
            $table->foreign('class_id')->references('class_id')->on('classes');
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
