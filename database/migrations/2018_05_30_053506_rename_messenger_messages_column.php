<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMessengerMessagesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messenger_messages', function ($table) {
            $table->renameColumn('message', 'content');
            $table->renameColumn('user_id', 'sender_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social', function (Blueprint $table) {
            //
        });
    }
}
