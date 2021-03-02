<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik');
            $table->string('domicile');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('username');
            $table->string('term_of_us');
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
            $table->dropColumn('nik');
            $table->dropColumn('domicile');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('gender');
            $table->dropColumn('phone_number');
            $table->dropColumn('username');
            $table->dropColumn('term_of_us');
        });
    }
}
