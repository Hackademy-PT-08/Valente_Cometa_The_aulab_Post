@guest 
<li class="nav-item">
    <a class="nav-link btn btn-success" href="{{ route('register')}}">Register</a>
</li>

<li class="nav-item">
    <a class="nav-link btn btn-danger" href="{{ route('login')}}">Login</a>
</li>

<li class="nav-item mx-3">
    <a class="nav-link btn btn-warning" href="{{ route('articles.create')}}">Pubblica articolo</a>
</li>

@endguest

@auth

<li class="nav-item">
    <a class="nav-link" >{{Auth::user()->name}}</a>
</li>

<li class="nav-item">


<form method="POST" action="{{route('logout')}}" style="" id="form-logout">
@csrf
<input type="submit" value="logout">
</form>

 

</li>
@endauth
