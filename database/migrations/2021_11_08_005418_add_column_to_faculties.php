<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToFaculties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculties', function (Blueprint $table) {
            // new column for existing Faculties table in DB

            $table->string('faculty_surname')->after('id');
            $table->string('faculty_middle_name')->nullable()->after('faculty_name');
            $table->string('gender');
            $table->string('age');
            $table->string('bloodtype');
            $table->string('contact_number');
            $table->string('address');
            $table->string('birth_year')->after('gender');
            $table->string('birth_month')->after('birth_year');
            $table->string('birth_day')->after('birth_month');
            $table->boolean('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculties', function (Blueprint $table) {
            //


            $table->dropColumn('faculty_surname');
            $table->dropColumn('faculty_middle_name');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('bloodtype');
            $table->dropColumn('contact_number');
            $table->dropColumn('address');
            $table->dropColumn('birth_year');
            $table->dropColumn('birth_month');
            $table->dropColumn('birth_day');
        });
    }
}
