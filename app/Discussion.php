<?php

namespace LaravelForum;

use LaravelForum\User;
use LaravelForum\Reply;

class Discussion extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }


    //usa o slug ao invés do id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function markAsBestReply(Reply $reply)
    {
        $this->update([
            'reply_id' => $reply->id
        ]);
    }
}
