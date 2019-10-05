<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ServiceModel extends Model {
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'label', 'status', 'created_at', 'updated_at'
    ];
}
