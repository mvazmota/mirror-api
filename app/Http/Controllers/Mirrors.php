<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mirror;

class Mirrors extends Controller
{
    public function getMirror($id)
    {
        $mirrors = Mirror::where('id', $id)
            ->get();

        $response = response($mirrors)
            ->header('Content-Type', 'application/json');

        return $response;
    }}
