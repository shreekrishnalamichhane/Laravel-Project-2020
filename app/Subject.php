<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','category_id'];

    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}
