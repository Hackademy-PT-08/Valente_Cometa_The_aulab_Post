<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('ui.name')}}</th>
            <th scope="col">{{__('ui.email')}}</th>
            <th scope="col">{{__('ui.action')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($writerRequests as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            <a href="{{route('admin.makeUserWriter', $user)}}" class="btn btn-dark" style="color:yellow">{{__('ui.addWriter')}}</a>
        </td>
        </tr>
        @endforeach
        

    </tbody>

</table>