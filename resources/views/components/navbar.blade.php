<nav class="navbar navbar-expand-lg  bg-warning btn btn-dark">

  <div class="container-fluid">
    
    <a class="navbar-brand" href="#"> <img src="{{asset('/immagini/logo.png')}}" alt="" style="height:30px"></a>
    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">


    
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
        
        <li class="nav-item btn">
          
          <a class="nav-link active" aria-current="page" href="{{route('home')}}"><i class="bi bi-house-door-fill"> Home</i></a>
        </li>
        
          </a>
        @auth
        <li class="nav-item btn ">
          <a class="nav-link" href="{{route('articles.create')}}"><i class="bi bi-pencil-fill"></i> Pubblica articolo</a>
          
        </li>
        @endauth
        <li class="nav-item dropdown btn ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
          <i class="bi bi-menu-button-wide-fill "> Utilities</i>
          </a>
          
          <ul class="dropdown-menu btn btn-dark" style="">
            <li><a class="dropdown-item" href="{{route('work.with.us')}}">Lavora con noi</a></li>
            @auth
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Area personale</a></li>
            @endauth
              
            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Area revisore</a></li>

            
             
            
          </ul>
      </ul>
      <form action="{{route('search.articles')}}" method="get" class="d-flex mx-5">
<input type="text" name="key" class="form-control me-2" placeholder="Cerca">
<button class="btn btn-outline-dark btn-floating " type="submit">Cerca</button>

</form>
      @guest
        <a href="{{route('register')}}" class="btn btn-outline-dark mx-5">Registrati</a>
        <a href="{{route('login')}}" class="btn btn-outline-dark mx-5">Login</a>
     @endguest


        @auth


    
    <button type="button" class="btn btn-dark "><a class="nav-link"> Bentornato {{Auth::user()->name}}</a></button>

    


<form method="POST" action="{{route('logout')}}" style="display-none" id="form-logout">
<input type="submit" value="logout" class="btn btn-outline-dark mx-5">

@csrf
</form>


@endauth
        
    </div>
  </div>



  
</nav>