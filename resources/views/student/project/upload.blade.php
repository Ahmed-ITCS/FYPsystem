
@foreach ($phases as $phase)
    
    
    @if ($phase->hasStarted())
        <h3>{{ $phase->name }}</h3>
        <p>{{ $phase->description }}</p>
        <p>Start Date: {{ $phase->start_date }}</p>
        <p>End Date: {{ $phase->end_date }}</p>
         Display phase data submission
        <form action="{{ route('student.project.upload.store', $phase) }}" method="POST">
            Form fields for data submission
            @csrf

            <div class="form-group">
                <label for="proposal">Proposal</label>
                <textarea id="proposal" name="proposal" class="form-control" required></textarea>
            </div>

            

            <div class="form-group">
                <label for="attachments">Attachments</label>
                <input type="file" id="attachments" name="attachments[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    @else
        <h3>{{ $phase->name }}</h3>
         <p>Phase has not started yet.</p> 
    @endif
@endforeach

