<?php

namespace App\Http\Controllers\Task;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(Request $request)
    {
        return view('task.createTask');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|max:255",
            'body' => "required"
        ]);
        // Task::create([
        //     'user_id' => auth()->id(),
        //     'name' => $request->input('name'),
        //     'body' => $request->input('body'),
        // ]); stejny jako 
        $request->user()->task()->create($request->only('name', 'body'));
        return redirect()->route('tasksPage');
    }

}
