<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    // Relational Mapping One to many Model
    // The User to Language Model is onne to many
    public function user() {
        return $this->belongsTo(User::class);
    }
}
