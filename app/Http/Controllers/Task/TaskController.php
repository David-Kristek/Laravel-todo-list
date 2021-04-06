<?php

namespace App\Http\Controllers\Task;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(Request $request)
    {
        $tasks =  $request->user()->task()->get();
        return view('task.tasksPage', ['tasks' => $tasks]);
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
    public function show(Task $task){
        return view('task.singleTask', ['task' => $task]); 
    }
}
