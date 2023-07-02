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


<table border='2'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Proposal</th>
                  </tr>
                @foreach ($data as $d)
                  
                  <tr>
                    <td>{{ $d['id'] }}</td>
                    <td>{{ $d['name'] }}</td>
                    <td>{{ $d['description'] }}</td>
                    <td>{{ $d['status'] }}</td>
                    <td><a href='{{ $d['document']}}'>SHOW PROPOSAL </a></td>
                  </tr>
                  @endforeach
                </table>
                