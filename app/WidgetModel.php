<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WidgetModel extends Model {
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'message', 'created_at', 'updated_at'
    ];
}
