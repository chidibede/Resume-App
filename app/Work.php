<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// Work Model to record past Work experiences
class Work extends Model
{
    // Relational Mapping One to many Model
    // The User to Work Model is one to many
    public function user() {
        return $this->belongsTo(User::class);
    }
}
