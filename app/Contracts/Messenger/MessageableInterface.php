<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/30/2018
 * Time: 5:59 PM
 */

namespace App\Contracts\Messenger;


interface MessageableInterface
{
    public function conversations();
    public function messagesSent();
}