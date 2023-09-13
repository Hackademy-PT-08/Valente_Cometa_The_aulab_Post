<x-layout>

    
   

    

    @if(auth()->user()->is_revisor)
<div class="container ">
    <div class="row">
        <div class="col-12 md-6">
            <h1>Bentornato {{Auth::user()->name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <x-revisor-table :articles="$articles"/>

            
        </div>
    </div>
</div>
@else 

<div class="alert alert-success my-5 text-center">
Non sei autorizzato, solo i revisori possono accedere.
    </div>
@endif


</x-layout>