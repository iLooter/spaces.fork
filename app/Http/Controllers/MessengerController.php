<?php

namespace App\Http\Controllers;

use App\Http\Requests\Messenger\SendMessageRequest;
use App\Http\Requests\Messenger\SearchUserRequest;
use App\Http\Requests\Messenger\NewMessageRequest;

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

    public function newMessage(NewMessageRequest $request)
    {

        $sendToUser = $request->query->all()['user']; //add check


        return view('messenger.new_message')->with(compact('sendToUser'));
    }

    public function write(SearchUserRequest $request)
    {
        if($request->isMethod('POST')) {
            $login = $request->search_login;

            try {

                $users = User::where('login', 'like', '%' . $login . '%')->get()/*->pluck('id', 'login')*/;
            }
            catch (\Exception $ex)
            {
                return redirect()->back()->withErrors(['exception', $ex->getMessage()]);
            }

            return view('messenger.write')->with(compact('users'));
        }

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
