<?php

namespace App\Models\Messenger;

use Illuminate\Database\Eloquent\Model;
use App\Models\Messenger\MessengerMessage as Message;
use Auth;

/**
 * Class Conversation
 * @package App\Models\Mail
 */
class MessengerConversation extends Model
{
    protected $table = 'messenger_conversations';



    public $timestamps = true;

    public $fillable = [
        'user_id',
        'status'
    ];


    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Messenger\MessengerMessage');
    }

    /*public function sendMessage(string $content)
    {
        $msg = new Message();
        $msg->setConversation($this->id);
    }*/


    public function getOppositeParticipant()
    {
       return $this->users()->where('user_id', '!=', Auth::id())->first();
    }

    public function countAllMessages()
    {
        return $this->messages()->count();
    }

    public function countUnseenMessages()
    {
        return $this->messages()->where('is_seen', '=', Message::UNSEEN)->count();
    }

    public function countSeenMessages()
    {
        return $this->messages()->where('is_seen', '=', Message::SEEN)->count();
    }

    public function markMessagesAsSeen()
    {
        $unseenMess = $this->messages()->where('sender_id', '!=', Auth::id())->where('is_seen', '=', Message::UNSEEN)->get();

        foreach($unseenMess as $mess)
        {
            $mess->markAsSeen();
            $mess->save();
        }


    }






}
