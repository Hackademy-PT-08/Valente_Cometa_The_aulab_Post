<x-layout>

<div class="container-my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richiesta Amministratore</h2>
            <x-admin-requests-table :adminRequests="$adminRequests"/>
        </div>
    </div>
</div>
<div class="container-my-3">
    <div class="row">
        <div class="col-12">
            <h2>Lista Amministratori</h2>
            <x-admin-list-table :adminList="$adminList"/>
        </div>
    </div>
</div>

<div class="container-my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richiesta revisore</h2>
            <x-revisor-requests-table :revisorRequests="$revisorRequests"/>

        </div>
    </div>
</div>
<div class="container-my-3">
    <div class="row">
        <div class="col-12">
            <h2>Lista revisori</h2>
            @if(auth()->user()->is_revisor || auth()->user()->is_admin)
            <x-revisor-list-table :revisorList="$revisorList"/>
            @else 
<div class="alert alert-success">
Non sei autorizzato, solo i revisori possono accedere.
    </div>
    @endif

        </div>
    </div>
</div>

<div class="container-my-5">
    <div class="row justify-content-center">
        <div class="col-12 cpl-md-8">
            <h2>Richiesta Articolista</h2>
            <x-writer-requests-table :writerRequests="$writerRequests"/>
        </div>
    </div>
</div>
<div class="container-my-5">
    <div class="row justify-content-center">
        <div class="col-12 cpl-md-8">
            <h2>Lista articolisti</h2>
            <x-writer-list-table :writerList="$writerList"/>
        </div>
    </div>
</div>

</x-layout>


