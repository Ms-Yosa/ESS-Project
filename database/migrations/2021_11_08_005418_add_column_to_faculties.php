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

            $table->string('surname')->after('id');
            $table->string('middle_name')->after('name');
            $table->string('gender');
            // $table->date('birthday');
            $table->string('age');
            $table->string('bloodtype');
            $table->string('contact_number');
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
        Schema::table('faculties', function (Blueprint $table) {
            //

            
            $table->dropColumn('surname');
            $table->dropColumn('middle_name');
            $table->dropColumn('gender');
            // $table->dropColumn('birthday');
            $table->dropColumn('age');
            $table->dropColumn('bloodtype');
            $table->dropColumn('contact_number');
            $table->dropColumn('address');
        });
    }
}
