<?php

namespace App\Models\Messenger;

use Illuminate\Database\Eloquent\Model;

class UserMessengerConversation extends Model
{
    protected $table = 'users_messenger_conversations';

    public $timestamps = 'true';

    protected $fillable = [
        'user_id',
        'messenger_conversation_id'
    ];



   /* public function user()
    {
        $this->belongsTo('App\Models\User', 'id', 'user_id');
    }

    public function conversation()
    {
        $this->belongsTo('App\Models\Messenger\Conversation', 'id', 'conversation_id');
    }*/
}
