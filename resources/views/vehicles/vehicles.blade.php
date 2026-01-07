<x-layout>
    <h1>Vehicles List</h1>
      <ul>
    @foreach ($vehicles as $vehicle)
      <li><br><a href="/vehicles/{{ $vehicle->id }}">{{ $vehicle->id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>