<!-- resources/views/student/project/application/create.blade.php -->
@extends('layout.app')

@section('content')
    <div class="application-form-container">
        <h1>Project Application</h1>

        <form method="POST" action="{{ route('student.project.application.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="proposal">Proposal</label>
                <textarea id="proposal" name="proposal" class="form-control" required></textarea>
            </div>

            <!-- Add other form fields as needed -->

            <div class="form-group">
                <label for="attachments">Attachments</label>
                <input type="file" id="attachments" name="attachments[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
@endsection
