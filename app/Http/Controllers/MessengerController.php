<?php

namespace App\Http\Controllers;

use App\Http\Requests\Messenger\SendMessageRequest;
use App\Models\Messenger\MessengerMessage as Message;
use App\Models\Messenger\MessengerConversation as Conversation;
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
        $conversations = Auth::user()->conversations()->get();

        return view('messenger.index')->with(compact('conversations'));
    }

    public function list()
    {
        return view('messenger.list');
    }

    public function newMessage()
    {
        //dd($request);
        return view('messenger.new_message');
    }

    public function write()
    {
        return view('messenger.write');
    }


    public function sendMessage(SendMessageRequest $request)
    {

        if($request->isMethod('POST'))
        {
            $newMessage = new Message();
            $newMessage->create($request->content, $request->conversation_id);
            $newMessage->save();
        }

        return redirect()->back();
    }

    public function conversation(int $conversationID)
    {

        $conversation = Conversation::find($conversationID);

        $conversation->markMessagesAsSeen();

        $data = array(
            'conversation_id' => $conversationID,
            'participantLog' =>  $conversation->getOppositeParticipant()->getLoginOrId(),
            'participantID' => $conversation->getOppositeParticipant()->id,
            'messages' => $conversation->messages()->latest()->paginate(10) //add pagination later
        );
        return view('messenger.conversation', compact('data'));
    }
}
