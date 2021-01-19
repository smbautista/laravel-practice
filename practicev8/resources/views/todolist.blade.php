<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js">

    <link href="{{ asset('resources/css/todolist.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('resources/js/todolist.js') }}"></script>
    
    <title>Todo-List</title>
</head>
<body>
<div id="container">
    <h1>To-Do List <i class="fa fa-plus"></i></h1> <input type="text" placeholder="Add New Todo">
    <ul>
        <li><span><i class="fa fa-trash"></i></span> Go To Maths Class</li>
        <li><span><i class="fa fa-trash"></i></span> Buy New Clothes</li>
        <li><span><i class="fa fa-trash"></i></span> Visit George</li>
    </ul>
</div>
</body>
</html>