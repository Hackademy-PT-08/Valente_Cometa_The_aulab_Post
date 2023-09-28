<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('ui.title')}}</th>
            <th scope="col">{{__('ui.category')}}</th>
            <th scope="col">{{__('ui.post')}}</th>
            <th scope="col">{{__('ui.posted')}}</th>
            <th scope="col">{{__('ui.btnLeggi')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{ $article->id}}</th>
            <td>{{ $article->title}}</td>
            <td>{{ $article->category->name}}</td>
            <td>{{ $article->user->name}}</td>
            <td>{{ $article->created_at->format('d-m-y')}}</td>
            <td>
                <a href="{{route('revisor.detail', $article)}}" class="btn btn-dark" style="color:yellow">{{__('ui.btnLeggi')}}</a>
            </td>    
        </tr>
    @endforeach
    </tbody>
</table>