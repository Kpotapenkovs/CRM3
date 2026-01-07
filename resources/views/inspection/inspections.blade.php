<x-layout>

    <h1>{{ $inspection->id }}</h1>

    <p>case id: <a href="/cases/{{ $inspection->case_id }}">{{ $inspection->case_id }}</a></p>
    <p>type: {{ $inspection->type }}</p>
    <p>requested_by: {{ $inspection->requested_by }}</p>
    <p>start_ts: {{ $inspection->start_ts }}</p>
    <p>location: {{ $inspection->location }}</p>
    <p>checks: {{ $inspection->checks }}</p>
    <p>assigned to: {{ $inspection->assigned_to }}</p>





</x-layout>