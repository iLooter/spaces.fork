<?php

namespace App\Models\Messenger;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conversation
 * @package App\Models\Mail
 */
class Conversation extends Model
{
    protected $table = 'messenger_conversations';
    public $timestamps = true;

    public $fillable = [
      'user_one',
      'user_two',
      'status'
    ];

    /*model params*/

    public  $userTwo = '';

    public function __construct(User $userTwo)
    {
        parent::__construct($userTwo);

        //add code if users doesn't exist
        $this->attributes['user_one'] = Auth::id();
        $this->attributes['user_two'] = $userTwo;

        Conversation::where('user_one', $this->attributes['user_one'])
            ->where('user_two', $this->attributes['user_two'])
            ->firstOrCreate(['user_one' => $this->attributes['user_one']], ['user_two' => $this->attributes['user_two']], ['status' => 0]);
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'conversation_id')->with('sender');
    }

    public function userone()
    {
        return $this->belongsTo('App\User', 'user_one');
    }

    public function usertwo()
    {
        return $this->belongsTo('App\User', 'user_two');
    }

    public function sendMessage(Message $message)
    {
        $message->user_id = $this->attributes['user_one'];

    }

    /*public function sendMessage()
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
    }*/


}
