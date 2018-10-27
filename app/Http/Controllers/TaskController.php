<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tasks = Task::all();
        return view('layout.tasks.index',compact('tasks'));
    }

     public function create()
    {
        return view('layout.tasks.create');
    }

    public function store(Request $request)
    {

        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task = Task::create(['title' => $request->title,'description' => $request->description]);
        return redirect('/tasks/'.$task->id);
      //  return redirect('/tasks');
    }

     public function show(Task $task)
    {
        return view('layout.tasks.show',compact('task',$task));
    }

     public function edit(Task $task)
    {
        return view('layout.tasks.edit',compact('task',$task));
    }

    public function update(Request $request, Task $task)
    {


        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('tasks');
    }


     public function destroy(Request $request, Task $task)
    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('tasks');
    }
}

    