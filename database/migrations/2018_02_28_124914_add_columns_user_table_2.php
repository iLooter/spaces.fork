<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUserTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('remember_token');
            $table->string('last_name')->after('first_name');
            $table->float('rating', '8', '2')->after('last_name');
            $table->enum('gender', ['male', 'female'])->after('rating');
            $table->date('birthday')->nullable()->after('gender');
            $table->enum('marital_status', [
                'none',
                'unmarried',
                'married',
                'no_longer_married',
                'active_search',
                'inlove',
                'betrothed',
                'complicated'
            ])->default('none')->after('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('User', function (Blueprint $table) {
            //
            $table->dropColumn(['first_name', 'last_name', 'rating', 'gender', 'birthday', 'marital_status']);
        });
    }
}
