<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/30/2018
 * Time: 5:58 PM
 */

namespace App\Contracts\Messenger;


interface MessageConversationParticipantInterface
{
    public function conversation();
    public function user();
}