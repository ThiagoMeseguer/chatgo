<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'transmitter_id',
        'receiver_group_id',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function receivers()
    {
        return $this->belongsToMany(User::class, 'message_receiver', 'message_id', 'user_id');
    }

}
