<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name',
        'venue',
        'location',
        'capacity',
        'ticket_price',
        'description',
        'contact_info',
        'start_date',
        'end_date',
        'category',
        'status',
        'organizer',
        'image_url',
        'tickets_sold',
        'currency',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
