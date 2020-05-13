<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    // Relational Mapping One to many Model
    // The User to Volunteer Model is one to many
    public function user() {
        return $this->belongsTo(User::class);
    }
}
