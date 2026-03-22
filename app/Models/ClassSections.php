<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSections extends Model
{
    //
    protected $fillable = ['class_id', 'section_id', 'academic_year_id'];
    protected $table = 'class_sections';
    
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function section()
    {
        return $this->belongsTo(Sections::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(Academic_years::class);
    }
}
