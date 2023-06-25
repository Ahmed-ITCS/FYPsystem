@foreach ($project->phases as $phase)
    <h3>{{ $phase->name }}</h3>
    <p>{{ $phase->description }}</p>
    <p>Start Date: {{ $phase->start_date }}</p>
    <p>End Date: {{ $phase->end_date }}</p>
@endforeach
