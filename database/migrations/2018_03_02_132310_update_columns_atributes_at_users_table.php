<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnsAtributesAtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            /*$table->string('first_name', 100)->nullable()->change();
            $table->string('last_name', 100)->nullable()->change();
            DB::statement("ALTER TABLE users CHANGE COLUMN gender gender  NOT NULL");
            DB::statement("ALTER TABLE users CHANGE COLUMN marital_status marital_status  DEFAULT 'none'");*/
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
