
<x-layout>
    


    @if (session()->has('status'))
    <div class="alert alert-success">
        {{session('status.message')}}
    </div>
    @endif
</x-layout>
