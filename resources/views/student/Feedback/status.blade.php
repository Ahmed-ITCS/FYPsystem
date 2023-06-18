<!-- resources/views/student/feedback/status.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="feedback-status-container">
        <h1>Feedback Status</h1>

        @if ($feedback->isEmpty())
            <p>No feedback available.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedback as $item)
                        <tr>
                            <td>{{ $item->project->name }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
