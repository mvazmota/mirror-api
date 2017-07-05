<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Tasks extends Controller
{
    public function getTasks()
    {
        $tasks = Task::orderBy('startTime', 'asc')
            ->get();

        $response = response($tasks)
            ->header('Content-Type', 'application/json');

        return $response;
    }
}
