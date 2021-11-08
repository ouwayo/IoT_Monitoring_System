<!DOCTYPE html>
<html lang="en">
<!-- use App\Models\Role; -->
<!-- use App\Charts\UserChart; -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
    
</head>
<body>
    <canvas id="chart" width="400" height="400"></canvas> 
    <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact">Contact</a></li>
    </ul>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
     
</body>
</html>