<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->take(3);
       
        return view('home', [
            'tasks' => $tasks,
        ]);
    }
}
