<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'profession', 'location', 'phone_number', 'profile_pics', 'linkedin', 'website'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function works() {
        return $this->hasMany(Work::class);
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function volunteers() {
        return $this->hasMany(Volunteer::class);
    }

    public function currentjobs() {
        return $this->hasMany(Currentjob::class);
    }


}
