<x-layout>

<x-slot:title>make user</x-slot:title>

<h1>make user</h1>

<form method="POST" action="/users">
@csrf


<p>username: <input name="username" />
  @error("username")
  <p>{{ $message }}</p>
  @enderror</p>  

<p>full name: <input name="full_name" />
  @error("full_name")
  <p>{{ $message }}</p>
  @enderror</p>  

  <p>password: <input type="password" name="password" />
  @error("password")
  <p>{{ $message }}</p>
  @enderror</p>

  <p>role: <input name="role" />
  @error("role")
  <p>{{ $message }}</p>
  @enderror</p>

  <p>user id: <input name="user_id" />
  @error("user_id")
  <p>{{ $message }}</p>
  @enderror</p>

  <p>active: <input name="active" />
  @error("active")
  <p>{{ $message }}</p>
  @enderror
</p>
  <button>Saglabāt</button>
</form>

</x-layout>