<x-layout>
<div class="container">
    <div class="row mt-5">
        
        </div>
        <div class="col-6 offset-3">
        <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-12">

        
            <h1 class="text-center my-5">{{$article->title}}</h1>
            <h3 class="text-center">{{$article->description}}</h3>
        </div>  
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <p>{{$article->body}}</p>
            
            <p > Pubblicato da : {{$article->user->name}}</p>
            <p > Pubblicato il : {{$article->created_at->format('y/m/d')}}</p>
            
            <span class="badge rounded-pill bg-info"><a href="{{route('articles.category', $article->category)}}" class=" card-text " style="text-decoration:none; color:black">{{$article->category->name}}</a></span>
        </div>
    </div>        
</div>
</x-layout>