<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent_students extends Model
{
    //
    
    protected $fillable = ['parent_id', 'student_id'];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function student()
    {
        return $this->belongsTo(Student_enrollments::class);
    }
}
