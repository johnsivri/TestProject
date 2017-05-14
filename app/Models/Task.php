<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Notifiable;

    protected $fillable = [

    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
