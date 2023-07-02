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


        <br><br><br>

        <a href="/studentphase1/1" class="btn btn-primary">phase1</a>
        <hr>
        <a href="/studentphase2/2" class="btn btn-primary">phase2</a>
        <hr>
        <a href="/studentphase3/3" class="btn btn-primary">phase3</a>