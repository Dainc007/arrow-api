<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

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
