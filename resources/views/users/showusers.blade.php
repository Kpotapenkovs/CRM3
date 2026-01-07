<x-layout>

    <h1>{{ $user->user_id }}</h1>
    
    <p>type: {{ $user->username }}</p>
    <p>name: {{ $user->full_name }}</p>
    <p>reg code: {{ $user->role }}</p>
    <p>active: @if($user->active) {{ 'active' }} @else {{ 'inactive' }} @endif</p>





</x-layout>