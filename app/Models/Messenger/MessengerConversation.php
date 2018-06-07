<?php

namespace App\Models\Messenger;

use Illuminate\Database\Eloquent\Model;
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


    public function getOppositeParticipant()
    {
       return $this->users()->where('user_id', '!=', Auth::id())->first();
    }






}
