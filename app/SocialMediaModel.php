<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SocialMediaModel extends Model {
    use Notifiable;

    protected $fillable = [
        'label', 'icon', 'uri', 'status', 'created_at', 'updated_at'
    ];
}
