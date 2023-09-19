<x-layout>




    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <header>
                <h1 class="giallo">ULTIMI ARTICOLI INSERITI</h1>
            </header>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-6">
            <div class="row my-4">
                @foreach($articles as $article)
                <div class="col-4 text-center ">
                    <div class="card ">
                        <img src="{{asset('storage/'.$article->img)}}" class="card-img-top" alt="{{$article->title}}">
                        <div class="card-body bg-dark">
                            <h5 class="card-title" style="color:yellow"> {{$article->title}}</h5>
                            <p class="card-text" style="color:yellow">{{substr($article->description,0,20)}}...</p>
                            <span class="badge rounded-pill bg-danger mx-2"><a
                                    href="{{route('articles.category',$article->category->id)}}" class="card-text;"
                                    style="text-decoration:none; color:black">{{$article->category->name}}</a></span>

                            <a href="{{route('articles.show',$article->id)}}" class="btn btn-warning">Leggi</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-6">
            <img src="{{asset('/immagini/0.png')}}" alt="" id="g">
        </div>
    </div>





</x-layout>