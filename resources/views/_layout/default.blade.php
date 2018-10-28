<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>@yield('title') -- ThinkPHP 入门教程</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="/static/css/app.css">
</head>
<body>
  @include('_layout.header')
  <div class="container">
    @yield('content')
  </div>
  @include('_layout.footer')
  
</body>
</html>