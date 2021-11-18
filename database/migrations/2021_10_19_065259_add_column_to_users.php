<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age');
            $table->string('gender');
            $table->string('religion');
            $table->string('student_bloodtype');
            $table->string('guardian');
            $table->string('contact_number');
            $table->string('relation');
            $table->string('guardian_bloodtype');
            $table->string('address');
            $table->string('surname')->after('id');
            $table->string('middle_name')->after('name');
            $table->string('guardian_surname')->after('student_bloodtype');
            $table->string('guardian_middle_name')->after('guardian');
            $table->string('birth_year')->after('gender');
            $table->string('birth_month')->after('birth_year');
            $table->string('birth_day')->after('birth_month');
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
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('religion');
            $table->dropColumn('student_bloodtype');
            $table->dropColumn('guardian');
            $table->dropColumn('contact_number');
            $table->dropColumn('relation');
            $table->dropColumn('guardian_bloodtype');
            $table->dropColumn('address');
            $table->dropColumn('surname');
            $table->dropColumn('middle_name');
            $table->dropColumn('guardian_surname');
            $table->dropColumn('guardian_middle_name');
            $table->dropColumn('birth_year');
            $table->dropColumn('birth_month');
            $table->dropColumn('birth_day');
        });
    }
}
