<x-layout>
    <h1>Document List</h1>
      <ul>
    @foreach ($documents as $document)
      <li><br><a href="/documents/{{ $document->id }}">{{ $document->id }}</a><hr></li>
    @endforeach
  </ul>

</x-layout>