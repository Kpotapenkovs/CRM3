<x-layout>
    <h1>Parties List</h1>
      <ul>
    @foreach ($parties as $part)
      <li><br><a href="/parties/{{ $part->id }}">{{ $part->id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>