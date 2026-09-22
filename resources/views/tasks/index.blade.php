<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <a href="{{ route('tasks.create') }}">Add Task</a>
    <table border="1">
        <thead>
            <th>Task</th>
            <th>Description</th>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

