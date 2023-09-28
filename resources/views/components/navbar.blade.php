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
          <ul class="dropdown-menu btn btn-dark" >
            <li><a class="dropdown-item" href="{{route('work.with.us')}}">Lavora con noi</a></li>
            @auth
            @if (Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Area personale</a></li>
            @endif
            @if (Auth::user()->is_revisor)
            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Area revisore</a></li>
            @endif
            @endauth
            @if(Auth::user() && Auth::user()->is_writer)
            <li><a class="dropdown-item" href="{{route('article.dashboard')}}">Area Autore</a></li>
            @endif
             
          </ul>
          <li class="nav-item mt-1">
          <x-_locale lang='it' nation='it'/>
         </li>

         
         <li class="nav-item mt-1">
          <x-_locale lang='en' nation='gb'/>
         </li>
         </ul>
      @guest
        <a href="{{route('register')}}" class="btn btn-outline-dark mx-5 my-2">{{__('ui.register')}} </a>
        <a href="{{route('login')}}" class="btn btn-outline-dark  ">{{__('ui.login')}} </a>
     @endguest

      <form action="{{route('search.articles')}}" method="get" class="d-flex mx-5">
<input type="text" name="key" class="form-control me-2" placeholder="{{__('ui.find')}}">
<button class="btn btn-outline-dark btn-floating " type="submit">{{__('ui.find')}}</button>

</form>
      

        @auth


    
    <button type="button" class="btn btn-dark "><a class="nav-link"> {{__('ui.welcome')}} {{Auth::user()->name}}</a></button>

    


<form method="POST" action="{{route('logout')}}" style="display-none" id="form-{{__('ui.out')}}">
<input type="submit" value="{{__('ui.out')}}" class="btn btn-outline-dark mx-5">

@csrf
</form>


@endauth
        
    </div>
  </div>



  
</nav>