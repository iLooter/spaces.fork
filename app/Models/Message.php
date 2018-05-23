<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public $timestamps = 'true';

    public $fillable = [
        'message',
        'is_seen',
        'deleted_from_sender',
        'deleted_from_receiver',
        'user_id',
        'conversation_id'
    ];

    public function conversation()
    {
       return $this->belongsTo('App\Models\Conversation');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function sender()
    {
        return $this->user();
    }
}
