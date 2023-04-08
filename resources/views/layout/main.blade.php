<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>{{$page}}</title>

 @include('layout/styles') 
</head>
<body>
    
  @include('layout/header')

<main class=""> 
    @yield('content')
</main>

@include('layout/footer')

@include('layout/scripts')
      
</body>
</html>