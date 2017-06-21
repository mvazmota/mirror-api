<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';

    protected $fillable = ['name', 'user_id'];

    public function songs()
    {
        return $this->hasMany('App\Song', 'playlist_id');
    }
}
