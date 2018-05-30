<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/30/2018
 * Time: 8:19 AM
 */

namespace App\Traits\Messenger;

use Auth;
use App\User;
use App\Models\Messenger\Conversation;
use App\Models\Messenger\Message;

trait Messageable
{

    /**
     * Set sender of the message
     *
     * @param User $user
     */
    public function setSender()
    {
        $this->sender_id = Auth::id;
    }

    public function setConversation(Conversation $conversation)
    {
        $this->conversation = $conversation->id;
    }



}