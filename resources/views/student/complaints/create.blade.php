<!-- resources/views/student/complaints/create.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
.navv{
    display: flex;
    
}
table, th, td {
  border: 1px solid black;
}
</style>
<body>


<div class="navv">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="dashboard">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="addstudent">Add Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="addadvisor">Add Advisor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="Projects">Projects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="complaint">Complaints</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="Proposals">Proposals</a>
  </li>
</ul>
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

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
                 
                
                

                
            </body>
            </html>

@extends('layout.app')

@section('content')
    <div class="complaint-create-container">

        <button><a href="Complains">Complains</a></button>
        <h1>Submit a Complaint</h1>
        <form method="POST" action="{{ route('student.complaints.store') }}">
            @csrf
            <div class="form-group">
                <label for="subject">You are complaining as </label>
                <select name = "AS">

                  <option>   </option>
                  <option value="Admin">Admin</option>
                  <option value="Student">Student</option>
                  <option value="Supervisor">Supervisor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
            </div>

            <div class="form-group">
                <label for="description">Complain</label>
                <textarea name="description" id="description" rows="5" required></textarea>
            </div>

            <button type="submit">Submit Complaint</button>
        </form>
    </div>
@endsection