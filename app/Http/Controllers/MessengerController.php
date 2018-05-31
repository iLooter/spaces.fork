<?php

namespace App\Http\Controllers;

use App\Http\Requests\Messenger\NewMessageRequest;
use App\Models\Messenger\Message;
use App\Models\Messenger\Conversation;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        /*$conversations = Conversation::where('user_one', '=', Auth::id())
            ->orWhere('user_two', '=', Auth::id())
            ->get();*/

        
        //dump(Auth::user()->conversations());



        return view('messenger.index')->with(compact('conversations'));
    }

    public function list()
    {
        return view('messenger.list');
    }

    public function write()
    {
        return view('messenger.write');
    }


    public function newMessage(NewMessageRequest $request)
    {

        if($request->isMethod('POST'))
        {

            $newMsg = new Message();
            $newMsg->setSender();

            $conversation = new Conversation();

            /*$newMsg = new Message();

            //if user exist
            $user_two = User::where('login', $request->username)->first();
            //else/
            //here code if user does not exist

            $conversation = Conversation::where('user_one', Auth::user()->id)
                ->where('user_two', $user_two->id)
                ->firstOrCreate(['user_one' => Auth::user()->id], ['user_two' => $user_two->id], ['status' => 0]);

            //dd($conversation);
            $newMsg->user_id = Auth::user()->id;
            $newMsg->message = $request->textmessage;
            $newMsg->conversation_id = $conversation->id;
            $newMsg->save();*/


            return redirect()->route('messenger.message_list')->with('system-message-info', 'Изменения сохранены');
        }

        return view('messenger.new_message');
    }

    public function messageList()
    {
        return view('messenger.message_list');
    }
}
