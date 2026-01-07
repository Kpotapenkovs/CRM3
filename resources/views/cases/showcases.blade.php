<x-layout>

    <h1>{{ $case->id }}</h1>
    
    <p>external ref: {{ $case->external_ref }}</p>
    <p>status: {{ $case->status }}</p>
    <p>priority: {{ $case->priority }}</p>
    <p>arrival ts: {{ $case->arrival_ts }}</p>
    <p>checkpoint id: {{ $case->checkpoint_id }}</p>
    <p>origin country: {{ $case->origin_country }}</p>
    <p>destination country: {{ $case->destination_country }}</p>
    <p>risk flags: {{ $case->risk_flags }}</p>
    <p>declarant id: {{ $case->declarant_id }}</p>
    <p>consignee id: {{ $case->consignee_id }}</p>
    <p>vehicle id: {{ $case->vehicle_id }}</p>




</x-layout>