<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
</head>
<body>
@auth

<h4 class=""><x-navigation></x-navigation></h4>

  <p>Sveiks, {{ Auth::user()->full_name}}</p>
    <br>


      @if (Auth::user()->role == 'broker') 

        <a href="/broker">darba lapa</a>
      
      @endif



  @if (Auth::user()->role == 'inspector') 

<a href="/inspector">darba lapa</a>

@endif



      @if (Auth::user()->role == 'analyst') 

      <a href="/analyst">darba lapa</a>

      @endif



@if (Auth::user()->role == 'admin') 

<a href="/admin">darba lapa</a>

@endif

<form action="/logout" method="POST">
@csrf

<button>atteikties</button>
</form>

@endauth

@guest
  <p>Sveiks, viesi!</p>
  <a href="/login">login</a>
  <br>
  <br>
  <a href="/register">reģistrēties</a> 
@endguest



</body>
</html>