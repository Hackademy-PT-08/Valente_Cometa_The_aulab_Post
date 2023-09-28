<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="card" style="width: 10rem;">
        <img src="{{Storage::url($image->url)}}" class="card-img-top" alt="{{$article->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{{substr($article->description,0,20)}}</p>
            <a href="{{route('article.show',$article)}}" class="btn btn dark" style="color:yellow">form-{{__('ui.read')}}</a>
        </div>
    </div>
    @endforeach
    </div>
</div>
            
            