<?php

namespace App\Http\Controllers;

use App\Models\{
    Category,
    Task
};
use Illuminate\Http\Request;


class TaskController extends Controller
{

    public function upTask(Request $request)
    {
       $task = Task::findOrFail($request->taskId);
       $task->is_done = $request->status;
       $task->save();
       return ['success' => true];
    }

    public function index()
    {
       
    }

    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $tasks = Task::create($request->all());

        return redirect()
            ->route('home');
            // ->with('message', 'Categoria cadastrada com sucesso!');

    }

    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        $categories = Category::all();

        if(!$tasks) {
            return redirect()->back();
        }

        return view('tasks.edit', [
            'tasks' => $tasks,
            'categories' => $categories
        ]);

    }

    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id);

        if(!$tasks) {
            return redirect()->back();
        }

        $tasks->update($request->all());

        return redirect()
            ->route('home');
            // ->with('message', 'Categoria cadastrada com sucesso!');


    }

    public function destroy($id)
    {

        $tasks = Task::findOrFail($id);

        if(!$tasks) {
            return redirect()->back();
        }

        $tasks->delete();

        return redirect()->route('home');
    }
}
