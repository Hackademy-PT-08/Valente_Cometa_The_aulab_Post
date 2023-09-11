
<x-layout>

    <div class="row">
    <div class="col-6">
        <h1 class="my-5 text-center" style="color:red">THE AULAB POST</h1>
    </div>
    </div>

    

    
        
  
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif


    <div class="row mt-5 my-5">
            @foreach($articles as $article)
            <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }} </h5>
                    <p class="card-text">{{substr($article->description,0,20)}}...</p>
                    <a href="{{route('articles.category',$article->category->id)}}" class="card-text">{{$article->category->name}}</a>
                    <a href="{{route('articles.show',$article->id)}}" class="btn btn-danger">Leggi</a>
                </div>
            </div>
            </div>
        @endforeach
        
    </div>
  
</x-layout>
