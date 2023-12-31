<x-layout>




    
        <div class="col-12">
            <header>
                <img src="{{asset('/immagini/ban2.png')}}" alt="" class="banner">
            </header>
        </div>
    
   

   <div class="container my-5">
    <div class="row">
        <div class="col-6 offset-3">
        @if (session()->has('success'))
    <div class="alert alert-success mx-5 text-center">
        {{session('success')}}
    </div>
    @endif
        </div>
    </div>
   </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6" >
            <div class="row">
                @foreach($articles as $article)
                <div class="col-xs-12 col-sm-12 col-md-6 col-xl-4 mb-3 text-center">
                    <div class="card mx-3" >
                        <img src="{{asset('storage/'.$article->img)}}" class="card-img-top" alt="{{$article->title}}">
                        <div class="card-body bg-dark">
                            <h5 class="card-title" style="color:yellow"> {{$article->title}}</h5>
                            <p class="card-text" style="color:yellow">{{substr($article->description,0,20)}}...</p>
                            <span class="badge rounded-pill bg-danger mx-3 mb-2"><a
                                    href="{{route('articles.category',$article->category->id)}}" class="card-text;"
                                    style="text-decoration:none; color:black">{{$article->category->name}}</a></span> <br>
                                    <span class="text-muted small fst-italic bg-warning" style="color:black">{{__('ui.allAnnouncements')}} {{$article->readDuration()}} min</span>
                                    <hr>
                                    <p class="small fst-italic text-capitalize bg-warning" >
                                        @foreach($article->tags as $tag)
                                        #{{$tag->name}}
                                        @endforeach
                                    </p>
                            <a href="{{route('articles.show',$article->slug)}}" class="btn btn-warning">{{__('ui.btnLeggi')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            

        </div>
        <div class="col-xs-12 col-sm-5 col-md-6 col-xl-6 d-none  d-xl-block" style="">
            <img src="{{asset('/immagini/hh.png')}}" alt="" id="responsive" >
        </div>
    </div>
    
</x-layout>