<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> {{__('ui.title')}} </th>
            <th scope="col"> {{__('ui.created')}} </th>
            <th scope="col"> {{__('ui.status')}} </th>
            <th scope="col"> {{__('ui.edit')}} </th>
            <th scope="col"> {{__('ui.delete')}} </th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->created_at->format("d/m/y")}}</td>
            <td>
            {{$article->is_accepted? " Pubblicato ": " non pubblicato "}}
            </td>
            <td>
                <a href="{{route('article.edit',$article)}}" class="btn btn-dark" style="color:yellow"> {{__('ui.edit')}} </a>
            </td>
            <td>
                <form action="{{route('article.delete',$article)}}" class="w-50" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark" type="submit" style="color:yellow"> {{__('ui.delete')}} </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>