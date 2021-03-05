<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableTermOfUsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('users', 'term_of_us')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('term_of_us');
            });
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('term_of_us')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'term_of_us')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('term_of_us');
            });
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('term_of_us');
        });
    }
}
