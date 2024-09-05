@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-4">
        <form action="{{ route('todos.store') }}" method="POST" class="form-inline">
            @csrf
            <div class="input-group">
                <input type="text" name="todo" class="form-control" placeholder="New Todo" required>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Todo
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <h1 class="text-center mt-4 mb-4">My Todo List</h1>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span>Todos</span>
            {{-- <a href="{{ route('todos.create') }}" class="btn btn-light btn-sm">
                <i class="fas fa-plus"></i> Add New
            </a> --}}
        </div>
        <ul class="list-group list-group-flush">
            @forelse ($todos as $index => $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $todo }}</span>
                    <div>
                        <a href="{{ route('todos.edit', $index) }}" class="btn btn-sm btn-warning mx-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('todos.destroy', $index) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="list-group-item text-center">No todos available. Add one below!</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
