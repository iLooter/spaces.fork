<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }

    public function list()
    {
        return view('messages.list');
    }

    public function write()
    {
        return view('messages.write');
    }

    public function newMessage()
    {
        return view('messages.new_message');
    }
}
