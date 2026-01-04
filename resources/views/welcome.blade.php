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