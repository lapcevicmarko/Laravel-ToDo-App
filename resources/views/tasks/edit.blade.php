<!DOCTYPE html>
<html>
    <head>
        <title>Task edit</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>Edit task</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Save changes</button>
            </form>
        </div>
    </body>
</html>