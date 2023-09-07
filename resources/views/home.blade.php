
<x-layout>
    
  
    @if (session()->has('status'))
    <div class="alert alert-success">
        {{session('status.message')}}
    </div>
    @endif

    

    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }} </h5>
                    <p class="card-text">{{substr($article->description,0,20)}}...</p>
                    <a href="{{route('articles.category',$article->category->id)}}" class="card-text">{{$article->category->name}}</a>
                    <a href="{{route('articles.show',$article->id)}}" class="btn btn-primary">Leggi</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
  
</x-layout>
