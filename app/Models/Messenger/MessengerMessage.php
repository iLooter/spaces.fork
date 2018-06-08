<?php

namespace App\Models\Messenger;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use App\Models\Messenger\MessengerConversation as Conversation;

class MessengerMessage extends Model
{
    //use SoftDeletes;

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
    'messenger_conversation_id'
];

    //Message status
    public const SEEN = 1;
    public const UNSEEN = 0;


    /***
     * @param string|null $content
     * @param int $conversationID
     */


    public function create(string $content = null, int $conversationID)
    {
        $this->content = $content;
        $this->is_seen = MessengerMessage::UNSEEN;
        $this->deleted_from_sender = false;
        $this->deleted_from_receiver = false;
        $this->sender_id = Auth::id();
        $this->messenger_conversation_id = ($conversationID);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversation()
    {
       return $this->belongsTo('App\Models\MessengerConversation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_id');
    }

    /***
     * @return bool
     */
    public function isAuthUserSender()
    {
        return Auth::id() == $this->sender_id ? true : false;
    }

    /***
     * void
     */
    public function markAsSeen()
    {
        $this->is_seen = MessengerMessage::SEEN;
    }

    /***
     * @param int $conv_id
     */
    public function setConversation(int $conv_id)
    {
        $this->messenger_conversation_id = $conv_id;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }





}
