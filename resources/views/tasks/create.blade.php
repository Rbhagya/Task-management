<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <input type="text" name="title" placeholder="Task Title" required>
        </div>
        <div class="mb-3">
        <input type="text" name="description" placeholder="Task description" >
        </div>
        <div class="mb-3">
        <select type="text" id="options" name="completed">
                            <option class="btn btn-success" value="completed">Completed</option>
                            <option class="btn btn-danger" value="pending">Pending</option>
                            <option class="btn btn-warning" value="working">Working</option>
                            <option class="btn btn-primary" value="todo">To-Do</option>
                        </select>
        </div>                
        <div class="mb-3">
        <input type="date" name="due_date" placeholder="Due Date" >
        </div>
        <div class="mb-3">
        <button type="submit">Create</button>
        </div>
    </form>
    <a href="{{ route('tasks.index') }}">Back to List</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
