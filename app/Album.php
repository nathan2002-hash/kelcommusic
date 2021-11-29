<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Album extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album', 'artist', 'words', 'number', 'year', 'image',
    ];

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
