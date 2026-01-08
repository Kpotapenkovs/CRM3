<x-layout>

    <h1>{{ $user->user_id }}</h1>
    
    <p>username: {{ $user->username }}</p>
    <p>fullname: {{ $user->full_name }}</p>
    <p>role: {{ $user->role }}</p>
    <p>active: @if($user->active) {{ 'active' }} @else {{ 'inactive' }} @endif</p>


  <h2><a href="/users/{{$user->id}}/edit">rediģēt</a></h2>

 <form method="POST" action="{{$user->id}}">
  
  @csrf
  @method("delete")

  <h2><input type="submit" name="delete" value="dzēst"></h2>

  </form>


</x-layout>