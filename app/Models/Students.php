<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $fillable = ['user_id','admission_date','dob','gender','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
