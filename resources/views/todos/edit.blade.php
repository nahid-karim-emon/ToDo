@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mt-4">
        <div class="card shadow-sm" style="width: 100%; max-width: 500px;">
            <div class="card-body">
                <h1 class="text-center mb-4">Edit Todo</h1>
                <form action="{{ route('todos.update', $id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="todo">Todo</label>
                        <input type="text" name="todo" id="todo" class="form-control" value="{{ old('todo', $todos[$id]) }}" placeholder="Update your todo" required>
                        @error('todo')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Update Todo</button>
                        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
