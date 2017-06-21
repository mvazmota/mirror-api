<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;

class Playlists extends Controller
{
    public function getPlaylist($id)
    {
        $playlists = Playlist::where('user_id', $id)
            ->with('songs')
            ->get();

        $response = response($playlists)
            ->header('Content-Type', 'application/json');

        return $response;
    }
}
