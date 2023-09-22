<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Articoli per: {{$key}} </h1>

            </div>

        </div>

    </div>

    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)

            <div class="col-12 mb-4">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="{{ Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-center"style="color:yellow"> {{$article->title}}</h5>
                        <p class="card-text text-center"style="color:yellow">{{$article->description}}</p>
                        <a href="{{route('articles.show', $article)}}" class="btn btn-warning" id="text" ><span>Leggi</span></a>
                    </div>


                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>