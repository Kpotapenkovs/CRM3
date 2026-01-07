<x-layout>

<h1>sveiki inspektor!</h1>
      <ul>
    @foreach ($inspections as $inspection)
      <li><br><a href="/inspections/{{ $inspection->id }}">{{ $inspection->id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>