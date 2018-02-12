<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->renameColumn('name', 'login')->unique();
            $table->string('first_name', 30)->after('remember_token');
            $table->string('last_name', 30)->after('name');
            $table->string('avatar', 255)->after('last_name');
            $table->timestamp('birthday')->after('avatar');
            $table->double('rating', 5, 3)->default(0)->after('birthday');
            $table->string('country', 2)->after('rating');
            $table->string('administrative_area', 100)->after('country');
            $table->string('locality', 50)->after('administrative_area');
            $table->enum('sex', ['male', 'female'])->after('last_name');
            $table->timestamp('last_visit')->after('locality');



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
            //
        });
    }
}
