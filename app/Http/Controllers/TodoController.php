<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $tasks = todo::where('task', 'like', '%' . request('search') . '%')->get();
        } else {
            $tasks = todo::orderBy('task', 'asc')->get();
        }

        return view('todo.app', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|min:3|max:25'
        ], [
            'task.required' => 'Input task wajib diisi',
            'task.min' => 'Input task minimal 3 karakter',
            'task.max' => 'Input task maksimal 25 karakter'
        ]);

        todo::create([
            'task' => $request->task
        ]);
        return redirect('todo')->with('success', 'Task berhasil disimpan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task' => 'required|min:3|max:25',
        ], [
            'task.required' => 'Input task wajib diisi',
            'task.min' => 'Input task minimal 3 karakter',
            'task.max' => 'Input task maksimal 25 karakter'
        ]);

        $data = [
            'task' => $request->task,
            'is_done' => $request->is_done
        ];

        todo::where('id', $id)->update($data);
        return redirect()->route('todo')->with('success', 'Berhasil menyimpan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        todo::where('id', $id)->delete();
        return redirect()->route('todo')->with('success', 'Berhasil menghapus data');
    }
}
