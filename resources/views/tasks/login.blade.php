<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>Login user</title>
</head>
<body>
<form action="{{ route('SaveUser') }}" method="POST">
@csrf
<div class="mb-3">
<label for="name" name="name">Name</label>
<input type="text" name="name" required>
</div>
<div classe="mb-3">
<label for="email" name="email">Email</label>
<input type="email" name="email" required>
</div>

<div class="mb-3">
<button type="submit">Create</button>
</div>



</form>
    
</body>
</html>