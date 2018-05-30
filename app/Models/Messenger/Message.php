<?php

namespace App\Models\Messenger;

use App\Traits\Messenger\MessageStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes, Messageable;

    /**
     * @var string
     */
    protected $table = 'messenger_messages';

    /**
     * @var string
     */
    public $timestamps = 'true';

    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'is_seen',
        'deleted_from_sender',
        'deleted_from_receiver',
        'sender_id',
        'conversation_id'
    ];




    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        /*
         * code here
         */
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversation()
    {
       return $this->belongsTo('App\Models\Conversation', 'conversation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_id');
    }

}
