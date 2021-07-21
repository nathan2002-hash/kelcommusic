<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Artist extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'dob', 'country', 'gender', 'image',
        'address', 'state', 'city', 'postcode', 'username', 'phone',
    ];

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function musics(){
        return $this->hasMany(Music::class);
    }
}
