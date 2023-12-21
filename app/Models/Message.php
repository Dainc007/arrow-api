<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Message extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'content',
        'from',
        'to',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class , 'from');
    }

    public function ToUser()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
