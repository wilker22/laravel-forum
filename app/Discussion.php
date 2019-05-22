<?php

namespace LaravelForum;

use LaravelForum\User;

class Discussion extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //usa o slug ao invés do id
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
