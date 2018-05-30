<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChatTagToConversationAndMessageTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('messages', 'messenger_messages');
        Schema::rename('conversations', 'messenger_conversation');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('messenger_messages', 'messages');
        Schema::rename('messenger_conversation', 'conversations');
    }
}
