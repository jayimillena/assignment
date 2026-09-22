<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>
<body>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" row="4" col="30" id=""></textarea>
        </div>
        <div>
            <input type="submit" name="store" value="store">
        </div>
        
    </form>
</body>
</html>