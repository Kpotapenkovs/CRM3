<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4 class=""><x-navigation></x-navigation></h4>
    <h1>sveiki inspektor!</h1>
      <ul>
    @foreach ($cases as $case)
      <li><br><a href="/cases/{{ $case->id }}">{{ $case->id }}</a><hr></li>
    @endforeach
  </ul>
</body>
</html>