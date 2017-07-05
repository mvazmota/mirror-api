<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class Calendars extends Controller
{
    public function getCalendars()
    {
        $calendars = Calendar::orderBy('startTime', 'asc')
            ->get();

        $response = response($calendars)
            ->header('Content-Type', 'application/json');

        return $response;
    }}
