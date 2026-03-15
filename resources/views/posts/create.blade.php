<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Post</h1>
 
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
 
    <label>Title:</label><br>
    <input type="text" name="title"><br><br>
 
    <label>Body:</label><br>
    <textarea name="body"></textarea><br><br>
 
    <button type="submit">Save</button>
</form>
</body>
</html>