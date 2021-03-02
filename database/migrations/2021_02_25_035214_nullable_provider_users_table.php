<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableProviderUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $columns = [
            'provider',
            'provider_id'
        ];

        if (Schema::hasColumns('users', $columns)) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('provider');
                $table->dropColumn('provider_id');
            });
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('provider')->nullable()->after('password');
            $table->string('provider_id')->nullable()->after('provider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $columns = [
            'provider',
            'provider_id'
        ];

        if (Schema::hasColumns('users', $columns)) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('provider');
                $table->dropColumn('provider_id');
            });
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('provider')->after('password');
            $table->string('provider_id')->after('provider');
        });
    }
}
