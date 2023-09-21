<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Revsione Articolo</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6"> 
                <h3 class="my-3"> <span class="h5">Titolo : </span>{{$article->title}}</h3>
                <h3 class="my-3"> <span class="h5">Descrizione : </span>{{$article->description}}</h3>
                <h3 class="my-3"> <span class="h5">Autore : </span>{{$article->user->name}}</h3>
                <h3 class="my-3"> <span class="h5">Categoria : </span>{{$article->category->name}}</h3>
                <h3 class="my-3"> <span class="h5">Creato: </span>{{$article->created_at->diffForHumans()}}</h3>
                <div class="d-flex">
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-dark mx-5" style="color:yellow">Accetta</a>
                    <a href="{{route('revisor.reject', $article)}}" class="btn btn-dark mx-5" style="color:yellow">Rifiuta</a>
                </div>
        </div>
    </div>
</div>
</x-layout>