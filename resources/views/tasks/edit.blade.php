<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .task {
            width: 90%;
            max-width: 1000px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        a, button {
            text-decoration: none;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            border-radius: 4px;
        }

        button {
            background-color: #dc3545;
            color: white;
            border-radius: 4px;
        }

        button:hover, .btn-success:hover {
            opacity: 0.8;
        }
    </style>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        <input type="text" name="title" value="{{ $task->title }}" required>
        <input type="text" name="description" value="{{$task->description}}">
        <select type="text" id="options" name="completed">
                            <option class="btn btn-success" value="completed">Completed</option>
                            <option class="btn btn-danger" value="pending">Pending</option>
                            <option class="btn btn-warning" value="working">Working</option>
                            <option class="btn btn-primary" value="todo">To-Do</option>
                        </select>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to List</a>
</body>
</html>
