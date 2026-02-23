<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // GET /api/tasks
    public function index()
    {
        return response()->json(Task::latest()->get());
    }

    // POST /api/tasks
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'is_done' => 'sometimes|boolean',
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    // GET /api/tasks/{task}
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // PUT/PATCH /api/tasks/{task}
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'is_done' => 'sometimes|boolean',
        ]);

        $task->update($validated);

        return response()->json($task);
    }

    // DELETE /api/tasks/{task}
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}