<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}">
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/semantic.min.js')}}"></script>
</head>
<body>
<div class="ui pointing menu">
    <a class="active item">
       {{config('app.name')}}
    </a>
    <a class="item">
        Home
    </a>
    <a href="{{url('/report')}}" class="item">
        Reports
    </a>
    <div class="right menu">
        <div class="item">
            <div class="ui transparent icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
        <a href="{{url('/logout')}}" class="item">
            logout
        </a>
    </div>
</div>

    <div class="ui container">
        @yield('body')
    </div>
</body>
</html>