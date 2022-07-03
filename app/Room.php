<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    function MeetingRoom()
    {
        return $this->belongsTo(MeetingRoom::class, 'room_id');
    }
}
