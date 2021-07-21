<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'music_id', 'name', 'email', 'comment',
    ];

    public function music(){
        return $this->belongsTo(Music::class, 'music_id');
    }
}
