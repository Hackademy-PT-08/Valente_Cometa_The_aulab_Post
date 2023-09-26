<x-layout>
<div class="container">
    <div class="row mt-5">
        
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 offset-xl-3">
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
            
            <span class="badge rounded-pill bg-dark mb-5"  id="ba"><a href="{{route('articles.category', $article->category)}}" class=" card-text " style="text-decoration:none; color:yellow">{{$article->category->name}}</a></span>

            
        </div>
    </div>        
</div>

<div class="d-flex center-content">
    <p class="h5">Tag:</p>
    @foreach ($article->tags as $tag)
    <span class="text-center">#{{$tag->name}}</span>
    @endforeach
</div>
</x-layout>