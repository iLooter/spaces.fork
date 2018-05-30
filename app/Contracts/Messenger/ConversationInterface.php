<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/30/2018
 * Time: 5:55 PM
 */

namespace App\Contracts\Messenger;


interface ConversationInterface
{
    public function messages();
    public function participants();
    public function getLastMessageAttribute();
    ///etc
}