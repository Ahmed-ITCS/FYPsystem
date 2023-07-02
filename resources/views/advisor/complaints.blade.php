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
</style>
<body>


<div class="navv">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="dashboard-advisor">Home</a>
  </li>

  <li class="nav-item">
    <a class="nav-link "href="projects-advisor">Projects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="complaints-advisor">Complaints</a>
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
                    <th>Subject</th>
                    <th>Complain</th>
                    <th>AS</th>
                    <th>Reply</th>
                  </tr>
                @foreach ($data as $d)
                  
                  <tr>
                    <td>{{ $d['id'] }}</td>
                    <td>{{ $d['subject'] }}</td>
                    <td>{{ $d['description'] }}</td>
                    <td>{{ $d['AS'] }}</td>
                    <td><form method="get" action="/GiveFeedback"> <input type="text" name="feedback">
                     <input type="hidden" name="id" value={{$d['id']}}    /></td>
                    <td><input type="submit"  value="Give Feedback"/></form></td>

                  </tr>
                  @endforeach
                </table>
            </body>
            </html>





