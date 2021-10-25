<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->date('birthday');
            $table->string('gender');
            $table->string('religion');
            $table->string('student_bloodtype');
            $table->string('guardian');
            $table->varchar('contact_number');
            $table->string('relation');
            $table->string('guardian_bloodtype');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropdown('birthday');
            $table->dropdown('gender');
            $table->dropdown('religion');
            $table->dropdown('student_bloodtype');
            $table->dropdown('guardian');
            $table->dropdown('contact_number');
            $table->dropdown('relation');
            $table->dropdown('guardian_bloodtype');
            $table->dropdown('address');
        });
    }
}
