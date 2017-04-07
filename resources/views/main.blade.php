<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.css" integrity="sha256-8CEI/ltDBxfGb0lev/b4YiRbQSPlllT89ukpFKC3Frg=" crossorigin="anonymous" />
    <style>
        body {
            padding: 50px 0;
        }
    </style>
</head>
<body>
<div class="ui container">
    @yield('content')
    <a href="/" class="ui mini primary left labeled icon button">
        <i class="left arrow icon"></i>
        Home
    </a>
</div>
</body>
</html>
