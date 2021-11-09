<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToAdmins1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('surname')->after('id');
            $table->string('middle_name')->after('name');
            $table->string('gender');
            $table->string('birth_year');
            $table->string('birth_month');
            $table->string('birth_day');
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
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('middle_name');
            $table->dropColumn('gender');
            $table->dropColumn('birth_year');
            $table->dropColumn('birth_month');
            $table->dropColumn('birth_day');
            $table->dropColumn('age');
            $table->dropColumn('bloodtype');
            $table->dropColumn('contact_number');
            $table->dropColumn('address'); 
        });
    }
}
