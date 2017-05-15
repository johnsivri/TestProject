<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Notifiable;

    protected $fillable = [
        'task_name', 'task_desc', 'due_date',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
