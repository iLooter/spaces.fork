<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/30/2018
 * Time: 5:54 PM
 */

namespace App\Contracts\Messenger;


interface MessageInterface
{
    public function sender();
    public function conversation();

}