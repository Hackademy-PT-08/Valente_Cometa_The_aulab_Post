<x-layout>
    <div class="contaniner">
        <div class="row">
            <div class="col-12">
                <h1>{{__('ui.welcome')}}, {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(count(Auth::user()->articles)> 0)
            <div class="col-12">
                <h1> {{__('ui.all')}} </h1>
                <x-articles-table :articles="Auth::user()->articles"/>

                
            </div>
            <div class="col-12 my-3">
                <h1> {{__('ui.not')}} </h1>
                <a href="{{route('article.create')}}" class="btn btn-dark" style="color:yellow">{{__('ui.first')}}</a>
            </div>
            @endif
        </div>
    </div>
</x-layout>