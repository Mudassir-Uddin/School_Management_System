<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_enrollments extends Model
{
    //
    protected $fillable = ['student_id','class_id','academic_year_id','admission_date','status','roll_number'];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
    
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
    
    public function academic_year()
    {
        return $this->belongsTo(Academic_years::class);
    }
}
