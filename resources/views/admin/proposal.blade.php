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
    <a class="nav-link "href="Proposals">Proposals</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="phase1">phase1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="phase2">phase2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="phase3">phase3</a>
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
                    <td><button><a href ="approveproject/{{$d['id']}}">Approve</a></button></td>
                    <td><button><a href ="deleteproject/{{$d['id']}}">Reject</a></button></td>

                  </tr>
                  @endforeach
                </table>
                
                
                

                
            </body>
            </html>