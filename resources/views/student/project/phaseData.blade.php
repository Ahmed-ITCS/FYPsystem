@foreach ($project->phases as $phase)
    <h3>{{ $phase->name }}</h3>
    <p>{{ $phase->description }}</p>
    <p>Start Date: {{ $phase->start_date }}</p>
    <p>End Date: {{ $phase->end_date }}</p>
    
    @if ($phase->phaseData)
        <p>Data: {{ $phase->phaseData->data }}</p>
    @endif
@endforeach
