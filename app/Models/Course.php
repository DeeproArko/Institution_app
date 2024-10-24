<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }
}
