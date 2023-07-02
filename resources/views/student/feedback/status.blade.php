<div class="dashboard-actions">
            <a href="{{ route('student.project.application.create') }}" class="btn btn-primary">Apply for Projects</a>
            <a href="{{ route('student.feedback.status') }}" class="btn btn-primary">View Feedback</a>
            <a href="{{ route('student.project.upload') }}" class="btn btn-primary">Upload Project Document</a>
            
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
                