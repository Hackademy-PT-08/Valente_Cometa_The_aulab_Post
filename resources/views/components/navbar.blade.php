<nav class="navbar navbar-expand-lg  bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The aulab post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home page</a>
        </li>
          </a>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.create')}}">Pubblica articolo</a>
        </li>
        @endauth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="{{route('work.with.us')}}">Lavora con noi</a></li>
            @auth
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Area personale</a></li>
            @endauth
              
            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Area revisore</a></li>
            
             
            
          </ul>
      </ul>
      
      @guest
        <a href="{{route('register')}}" class="btn btn-outline-success mx-5">Registrati</a>
        <a href="{{route('login')}}" class="btn btn-outline-success mx-5">Login</a>
     @endguest


        @auth


    <a class="nav-link" >{{Auth::user()->name}}</a>

    


<form method="POST" action="{{route('logout')}}" style="display-none" id="form-logout">
<input type="submit" value="logout" class="btn btn-outline-success mx-5">

@csrf
</form>


@endauth
        
    </div>
  </div>



  
</nav>