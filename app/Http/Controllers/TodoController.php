<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = $request->session()->get('todos', []);
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $todos = $request->session()->get('todos', []);
        $todos[] = $request->input('todo');
        $request->session()->put('todos', $todos);
        return redirect()->route('todos.index');
    }

    public function edit($id, Request $request)
    {
        $todos = $request->session()->get('todos', []);
        return view('todos.edit', compact('id', 'todos'));
    }

    public function update($id, Request $request)
    {
        $todos = $request->session()->get('todos', []);
        $todos[$id] = $request->input('todo');
        $request->session()->put('todos', $todos);
        return redirect()->route('todos.index');
    }

    public function destroy($id, Request $request)
    {
        $todos = $request->session()->get('todos', []);
        unset($todos[$id]);
        $request->session()->put('todos', $todos);
        return redirect()->route('todos.index');
    }
}
