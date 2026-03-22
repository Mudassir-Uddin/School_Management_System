<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSubjects extends Model
{
    //
    protected $fillable = ['class_section_id', 'subject_id'];
    protected $table = 'class_subjects';
    
    public function classSection()
    {
        return $this->belongsTo(ClassSections::class,'class_section_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
}
