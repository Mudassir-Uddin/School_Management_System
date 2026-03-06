<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //
    protected $fillable = ['user_id','qualification','experience_years','joining_date','salary'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
