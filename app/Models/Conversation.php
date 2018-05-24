<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = 'conversations';
    public $timestamps = true;

    public $fillable = [
      'user_one',
      'user_two',
      'status'
    ];

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

}
