<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currentjob extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }
}
