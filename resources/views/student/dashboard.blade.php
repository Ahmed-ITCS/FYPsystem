<!-- resources/views/student/dashboard.blade.php -->

@extends('layout.app')

@section('content')
    <div class="dashboard-container">
        <h1>Welcome to the Student Dashboard</h1>

        <div class="dashboard-actions">
            <a href="{{ route('student.project.application.create') }}" class="btn btn-primary">Apply for Projects</a>
            <a href="{{ route('student.feedback.status') }}" class="btn btn-primary">View Feedback</a>
            <a href="{{ route('student.complaint.submit') }}" class="btn btn-primary">Submit Complaint</a>
            <a href="{{ route('student.project.upload', 1) }}" class="btn btn-primary">Upload Project Document</a>
            <a href="/studentphase1" class="btn btn-primary">phase1</a>
            <a href="/studentphase2" class="btn btn-primary">phase2</a>
            <a href="/studentphase3" class="btn btn-primary">phase3</a>
             <!-- Authentication -->
             <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
        </div>

        <!-- Add any additional sections or information as needed -->
    </div>
@endsection