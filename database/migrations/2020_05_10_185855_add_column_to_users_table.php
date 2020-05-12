<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            //
            $table->string('username')->after('email')->default("");
=======
            // Add username column
            $table->string('username')->after('email')->nullable();
>>>>>>> df8ed90d1bdaa9c31eca3be0474a4a5d5954b562
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
            // Drop column if requested
            $table->dropColumn('username');
        });
    }
}
