<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
       
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('tasks.edit');
    }

    public function delete()
    {
        return redirect()->route('home');
    }
}
