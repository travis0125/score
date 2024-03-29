<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student as StudentEloquent;

class Score extends Model
{
    //protected $table = 'score';

    public function student()
    {
        return $this->belongsTo(StudentEloquent::class);
    }

    public function scopeOrderByTotal($query)
    {
        return $query->orderBy('total', 'DESC');
    }

    public function scopeOrderBySubject($query)
    {
        return $query->orderBy('chinese', 'DESC')->orderBy('english', 'DESC')->orderBy('math', 'DESC');
    }
}