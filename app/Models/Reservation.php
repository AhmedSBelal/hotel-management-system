<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function guest() {
        return $this->belongsTo(Guest::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

}
