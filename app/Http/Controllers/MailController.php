<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }

    public function list()
    {
        return view('mail.list');
    }

    public function write()
    {
        return view('mail.write');
    }

    public function newMessage()
    {
        return view('mail.new_message');
    }
}
