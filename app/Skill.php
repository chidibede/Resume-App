<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Skill Model to record user's skills
class Skill extends Model
{
    // Relational Mapping One to many Model
    // The User to Skill Model is one to many
    public function user() {
        return $this->belongsTo(User::class);
    }
}
