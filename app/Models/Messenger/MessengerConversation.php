<?php

namespace App\Models\Messenger;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany('App\Models\User'/*, 'users_messenger_conversation', 'id', 'user_id'*/);
    }



}
