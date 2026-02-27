<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Sections;
use App\Models\Academic_years;

class Classes extends Model
{
    //
    protected $fillable = ['name', 'section_id', 'academic_year_id'];

    public function section()
    {
        return $this->belongsTo(Sections::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(Academic_years::class);
    }

}
