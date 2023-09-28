<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('ui.name')}}</th>
            <th scope="col"> {{__('ui.email')}} </th>
            <th scope="col">{{__('ui.action')}}</th>
            <th scope="col"> {{__('ui.status')}} </th>
        </tr>
    </thead>
    <tbody>
        @foreach($revisorList as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>

        <td>
            <a href="{{route('admin.makeUserRevisor', $user)}}" class="btn btn-dark" style="color:yellow"> {{__('ui.addRevisor')}} </a>
            <a href="{{route('revisor.remove',$user)}}" class="btn btn-dark" style="color:yellow"> {{__('ui.remRevisor')}} </a>
        </td>
        <td>
            @if($user->is_revisor==true)
             <span style="color:green">{{__('ui.accepted')}}</span>
            @endif

            @if($user->is_revisor==false)
            <span style="color:red">{{__('ui.refused')}}</span>
            @endif

        </td>
        </tr>
        @endforeach
    </tbody>
</table>