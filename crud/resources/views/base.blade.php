<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/mainCss/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <h3>Interview</h3>
        </div>
        <div class="navs">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Data</a></li>
            </ul>
        </div>
        <div class="accounts">
            <ul>
                <li><a href="">Login</a></li>
                <li><a href="">Register</a></li>
            </ul>
        </div>
    </div>

    @yield('content')



</body>
</html>