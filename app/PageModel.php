<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PageModel extends Model {
    use Notifiable;

    protected $fillable = [
        'title', 'uri', 'content', 'status', 'created_at', 'updated_at'
    ];
}
