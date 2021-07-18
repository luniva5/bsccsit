<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body{
            height: 100px;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        nav{
            display: flex;
            padding: 20px;
            width: 100%;
            background-color: skyblue;
            
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar-item">HOME</div>
        <div class="navbar-item">ABOUT</div>
    </nav>
@yield('content')
</body>
</html>