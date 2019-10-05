<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SubscribeModel extends Model {
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'message', 'created_at', 'updated_at'
    ];
}
