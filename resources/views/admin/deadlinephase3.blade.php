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
  border-collapse : collapse;
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
                <p>your deadline for phase 1 is :</p>
                @foreach ($dead as $d)
                <h2>{{$d['submissiondate']}}</h2>
                <h2>{{$d['submissiontime']}}</h2>
                @endforeach
                <form action="phase3dead" method="post">
                    @csrf
                    <input type="date" name="submissiondate" /><br />
                    <input type="time" name="submissiontime" />
                    <input type="submit" value="add deadline"/>
                </form>
                <table border="1">
                  <tr>
                    <td>ID</td>
                    <td>description</td>
                    <td>document</td>
                    <td>Give marks</td>
                    <td></td>
                  </tr>
                @foreach ($pros as $p)
                <tr>
                  <td>{{$p['id']}}</td>
                  <td>{{$p['description']}}</td>
                  <td><a href="{{$p['document']}}">Show Document</a></td>
                  <td><form action="/givemarks3" method="post">
                    @csrf
                    <input type="hidden" name="pid" value="{{$p['id']}}" />
                    <input type="number" name="marks" />
                  </td>
                  <td><input type="submit" value="Submit markss" /></td>
                  </form>
                </tr>
                @endforeach   
                </table>           
            </body>
            </html>