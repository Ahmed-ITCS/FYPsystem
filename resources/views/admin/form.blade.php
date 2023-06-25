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
    <h1>Make Student</h1>
    <form action="addstudentsave" method ="POST">
        @csrf
        <table>
            <tr>
                <td><label>Name: </label></td>
                <td><input type ="name" placeholder="Ahmed" name="name"/></td>
            </tr>
            <tr>
                <td><label>Email: </label></td>
                <td><input type ="email" placeholder="Ahmed@whatever.com" name="email"/></td>
            </tr>
            <tr>
                <td><label>Password: </label></td>
                <td><input type ="password" placeholder="********" name="password"/></td>
            </tr>
            <tr>
                <td><label>Confirm Password: </label></td>
                <td><input type ="password" placeholder="********" name="password1"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select name="roles">
                    <option value="student">Student</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Make User"/>
                </td>
            </tr>
            
        </table>
    </form>
    <h1>Students</h1>
    <table>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Email</th>
            <th></th>
            <th>Roles</th>
        </tr>
    <?php
    ?>
    <tr>
    <?php
    foreach($data as $d)
    {
        ?>
        <td>{{$d->name}}</td>
        <td></td>
        <td>{{$d->email}}</td>
        <td></td>
        <td>{{$d->roles}}</td>
        <td><button><a href="deletestudent/{{$d->id}}">Delete</a></button></td>
        </tr>
        <?php

    }

    ?>
    </table>
</body>
</html>