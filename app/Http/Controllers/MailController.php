<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mail\NewMessageRequest;
use App\Models\Message;
use App\Models\Conversation;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

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


    public function newMessage(NewMessageRequest $request)
    {

        if($request->isMethod('POST'))
        {


            $newMsg = new Message();

            //if user exist
            $user_two = User::where('login', $request->username)->first();
            //else
            //here code if user does not exist

            $conversation = Conversation::where('user_one', Auth::user()->id)
                ->where('user_two', $user_two->id)
                ->firstOrCreate(['user_one' => Auth::user()->id], ['user_two' => $user_two->id], ['status' => 0]);

            //dd($conversation);
            $newMsg->user_id = Auth::user()->id;
            $newMsg->message = $request->textmessage;
            $newMsg->conversation_id = $conversation->id;
            $newMsg->save();


            return redirect()->route('mail.message_list')->with('system-message-info', 'Изменения сохранены');
        }

        return view('mail.new_message');
    }

    public function messageList()
    {
        return view('mail.message_list');
    }
}
