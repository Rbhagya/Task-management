<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <!---<style>
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
    </style>--->
</head>
<body>
<h1> User List</h1>
<a href="{{route('User.create')}}">Create User</a>
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create Task</a>
    <div class="task">
        <table class="table">
            <thead>
                <tr>
                    <th>SR.no</th>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Task Status</th>
                    <th>Download</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>
                            {{ $task->due_date }}
                        </td>
                        <td>
                            {{ $task->completed }}
                        </td>
                        <td>
                            <a href="{{ route('tasks.pdf') }}" class="btn btn-success">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}">Edit</a> |
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
