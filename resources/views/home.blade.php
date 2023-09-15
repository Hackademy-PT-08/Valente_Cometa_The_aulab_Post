<x-layout>

    
    

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    


    <div class="background-image">

    </div>

    <div class="container " id="card-space">
        <div class="row ">
            @foreach($articles as $article)
            <div class="col-3 text-center mx-4 ">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('storage/'.$article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }} </h5>
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
    


        </div>

    


</x-layout>