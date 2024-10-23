<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
