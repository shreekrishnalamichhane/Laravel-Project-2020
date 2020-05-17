<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function users(){
        return $this -> belongsTo(User::class);
    }
}
