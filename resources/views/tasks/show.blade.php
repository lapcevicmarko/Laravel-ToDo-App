<!DOCTYPE html>
<html>
    <head>
        <title>Show task</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>Tasks details</h1>
            <div>
                <h2>{{ $task->title }}</h2>
                <p>{{ $task->description }}</p>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </body>
</html>