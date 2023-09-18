<x-layout>

    
    

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

   

    
       
   
       
        
   
    
    
   
    

 

    <div class="row mt-5">
        <div class="col-6">
        <header>
        <h1>Il Mio Blog</h1>
        
    </header>
    <main>
    <div class="row ">
            @foreach($articles as $article)
            <div class="col-4 text-center mx-1 my-3">
                <div class="card " >
                    <img src="{{asset('storage/'.$article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title"> {{$article->title}}</h5>
                        <p class="card-text">{{substr($article->description,0,20)}}...</p>
                        <span class="badge rounded-pill bg-info mx-2"><a
                                href="{{route('articles.category',$article->category->id)}}" class="card-text;"
                                style="text-decoration:none; color:black">{{$article->category->name}}</a></span>

                        <a href="{{route('articles.show',$article->id)}}" class="btn btn-danger">Leggi</a>
                    </div>
                </div>
            </div>

            
                
           







            @endforeach
        </div>

    </main>
        </div>
        <div class="col-6" style="padding-left:100px">
        <img src="{{asset('/immagini/0.png')}}" alt="" id="g">

    
        </div>
    </div>
</div>



    




</x-layout>