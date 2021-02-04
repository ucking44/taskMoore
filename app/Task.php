<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Task extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $fillable  = [
        'category_id',
        'name',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
