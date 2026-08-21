<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resources(task).
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255|min:10',
            'description' => 'nullable|string',
        ]);

        Tasks::create($request->only('title' , 'description'));
        return redirect()->route('tasks.index')->with('success','Task created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasks $tasks)
    {
        return view('tasks.show',compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasks $tasks)
    {
        return view('tasks.edit',compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasks $tasks)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:10',
            'description' => 'nullable|string',
        ]);

        $tasks->update($request->only('title', 'description'));

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasks)
    {
        $tasks->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}