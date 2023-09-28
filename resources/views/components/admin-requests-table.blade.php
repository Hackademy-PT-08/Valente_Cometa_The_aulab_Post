

    

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
        @foreach($adminRequests as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            <a href="{{route('admin.makeUserAdmin', $user)}}" class="btn btn-dark"style="color:yellow"> {{__('ui.permission')}} </a>
            
        </td>
        </tr>
        @endforeach
        

    </tbody>

</table>

    
