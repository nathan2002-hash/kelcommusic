<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Track extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'artist_id', 'featuring', 'music', 'day', 'month', 'pcontact', 'download_count',
        'year', 'message', 'title', 'image', 'username', 'video_id', 'producer', 'album_id',
    ];

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
