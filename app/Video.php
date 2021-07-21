<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Video extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video', 'title', 'day', 'month', 'year', 'artist_id',
        'image', 'featuring', 'username'
    ];

    public function artist(){
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
