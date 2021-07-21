<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Music extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'artist_id', 'featuring', 'music', 'day', 'month',
        'year', 'message', 'title', 'image', 'username', 'video_id',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class, 'artist_id');
    }

}
