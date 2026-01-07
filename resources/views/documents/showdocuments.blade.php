<x-layout>

    <h1>{{ $document->id }}</h1>
    
    <p>case id: <a href="/cases/{{ $document->case_id }}">{{ $document->case_id }}</a></p>
    <p>filename: {{ $document->filename }}</p>
    <p>mime_type: {{ $document->mime_type }}</p>
    <p>category: {{ $document->category }}</p>
    <p>pages: {{ $document->pages }}</p>
    <p>uploaded_by: {{ $document->uploaded_by }}</p>




</x-layout>