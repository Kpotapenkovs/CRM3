<x-layout>

<x-slot:title>
rediģēt
</x-slot:title>

<h1>edit</h1>

<form method="POST" action="/users/{{ $user->id }}">
@csrf

@method('PUT')

<label>
<br>
username: 
<input name="username" value="{{$user->username}}"/>
@error("username")
  <p>{{ $message }}</p>
@enderror
<br>
</label>

<label>
<br>
full name:
<input name="full_name" value="{{$user->full_name}}"/>
@error("full_name")
  <p>{{ $message }}</p>
@enderror
<br>
</label>


<label>
<br>
role:
<select name="role">
  <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
  <option value="inspector" {{ $user->role == 'inspector' ? 'selected' : '' }}>Inspektor</option>
  <option value="analyst" {{ $user->role == 'analyst' ? 'selected' : '' }}>Analyst</option>
  <option value="broker" {{ $user->role == 'broker' ? 'selected' : '' }}>Broker</option>
</select>
@error("role")
  <p>{{ $message }}</p>
@enderror
<br>
</label>


<br>
  <label>
  paroli:
  <input name="password" type="password" value="{{$user->password}}"/>
  @error("password")
    <p>{{ $message }}</p>
  @enderror
  </label>
<br>


<label>
<br>
active:
<select name="active">
  <option value="1" {{ $user->active == 1 ? 'selected' : '' }}>Jā</option>
  <option value="0" {{ $user->active == 0 ? 'selected' : '' }}>Nē</option>
</select>
@error("active")
  <p>{{ $message }}</p>
@enderror
<br>
</label>

<br>


  <button>rediģēt</button>
</form>

</x-layout>