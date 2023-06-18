<!-- resources/views/student/complaints/create.blade.php -->

@extends('layout.app')

@section('content')
    <div class="complaint-create-container">
        <h1>Submit a Complaint</h1>

        <form method="POST" action="{{ route('student.complaints.store') }}">
            @csrf
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5" required></textarea>
            </div>

            <button type="submit">Submit Complaint</button>
        </form>
    </div>
@endsection
