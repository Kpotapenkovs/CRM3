<x-layout>
    <h1>Users List</h1>
    <h2><a href="/users/create">izveidot</a></h2>
      <ul>
    @foreach ($users as $user)
      <li><br><a href="/users/{{ $user->id }}">{{ $user->user_id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>