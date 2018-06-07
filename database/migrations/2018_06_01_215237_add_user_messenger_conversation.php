<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserMessengerConversation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_conversation_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('messenger_conversation_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('messenger_conversation_user', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('messenger_conversation_id')->references('id')->on('messenger_conversations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_messenger_conversations');
    }
}
