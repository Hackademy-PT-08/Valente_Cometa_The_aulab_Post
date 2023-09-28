<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1> {{__('ui.rew')}} </h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6"> 
                <h3 class="my-3"> <span class="h5">{{__('ui.title')}}  </span>{{$article->title}}</h3>
                <h3 class="my-3"> <span class="h5">{{__('ui.description')}} </span>{{$article->description}}</h3>
                <h3 class="my-3"> <span class="h5">{{__('ui.author')}}  </span>{{$article->user->name}}</h3>
                <h3 class="my-3"> <span class="h5">{{__('ui.cetegory')}}  </span>{{$article->category->name}}</h3>
                <h3 class="my-3"> <span class="h5">{{__('ui.create')}} </span>{{$article->created_at->diffForHumans()}}</h3>
                <div class="d-flex">
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-dark mx-5" style="color:yellow">{{__('ui.accepted')}}</a>
                    <a href="{{route('revisor.reject', $article)}}" class="btn btn-dark mx-5" style="color:yellow">{{__('ui.refused')}}</a>
                </div>
        </div>
    </div>
</div>
</x-layout>