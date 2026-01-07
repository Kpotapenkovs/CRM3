<x-layout>
    <h1>Cases List</h1>
      <ul>
    @foreach ($cases as $case)
      <li><br><a href="/cases/{{ $case->id }}">{{ $case->id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>