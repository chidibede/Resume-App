<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Education Model to record past Education History
class Education extends Model
{
    // Relational Mapping One to many Model
    // The User to Education Model is one to many
    public function user() {
        return $this->belongsTo(User::class);
    }
}
