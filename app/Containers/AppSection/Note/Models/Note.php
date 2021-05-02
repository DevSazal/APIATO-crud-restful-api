<?php

namespace App\Containers\AppSection\Note\Models;

use App\Ship\Parents\Models\Model;

class Note extends Model
{
    protected $fillable = [
        'task',
        'time',
        'user_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Note';
}
