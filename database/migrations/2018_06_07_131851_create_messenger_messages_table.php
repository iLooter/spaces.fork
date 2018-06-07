<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessengerMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->boolean('is_seen')->default(0);
            $table->boolean('deleted_from_sender')->default(0);
            $table->boolean('deleted_from_receiver')->default(0);
            $table->integer('sender_id')->unsigned();
            $table->integer('messenger_conversation_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('messenger_messages', function (Blueprint $table)
        {
            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('messenger_conversation_id')->references('id')->on('messenger_conversations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messenger_messages');
    }
}
