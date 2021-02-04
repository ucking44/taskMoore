<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Task;

class Category extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
