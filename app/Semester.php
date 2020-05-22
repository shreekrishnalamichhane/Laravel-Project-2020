<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = ['name'];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
