<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','weibo app')-Laravel 新手入门教程</title>
  <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
  @include('layouts._header')
  <div>
     @yield('content')
  </div>
  @include('layouts._footer')
</body>
</html>
