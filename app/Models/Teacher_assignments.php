<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_assignments extends Model
{
    //
    protected $fillable = ['teacher_id', 'class_subjects_id', 'academic_year_id'];

    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }

    public function classSubject()
    {
        return $this->belongsTo(ClassSubjects::class, 'class_subjects_id');
    }

    public function academic_year()
    {
        return $this->belongsTo(Academic_years::class);
    }
}
