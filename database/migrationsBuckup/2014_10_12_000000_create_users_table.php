<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('email')->unique();
            $table->string('email_token')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_confirmed')->default(false);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->float('rating', '8', '2');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthday')->nullable();
            $table->enum('marital_status', [
                'none',
                'unmarried',
                'married',
                'no_longer_married',
                'active_search',
                'inlove',
                'betrothed',
                'complicated'
            ])->default('none');
            $table->string('profession', 40)->nullable();
            $table->dateTime('last_visit')->nullable();
            $table->unsignedInteger('total_online')->nullable();

            $table->timestamps();
            //DB::statement('ALTER TABLE `users` ADD `ip_address` VARBINARY(4)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
