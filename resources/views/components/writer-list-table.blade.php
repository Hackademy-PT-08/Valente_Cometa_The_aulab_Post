<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('ui.name')}}</th>
            <th scope="col">{{__('ui.email')}}</th>
            <th scope="col">{{__('ui.action')}}</th>
            <th scope="col">{{__('ui.status')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($writerList as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            <a href="{{route('admin.makeUserWriter', $user)}}" class="btn btn-dark"  style="color:yellow">{{__('ui.addWriter')}}</a>
            <a href="{{route('writer.remove',$user)}}" class="btn btn-dark"  style="color:yellow">{{__('ui.remWriter')}}</a>
        </td>
        <td>
            @if($user->is_writer==true)
             <span style="color:green">{{__('ui.accepted')}}</span>
            @endif

            @if($user->is_writer==false)
            <span style="color:red">{{__('ui.refused')}}</span>
            @endif

        </td>
        </tr>
        @endforeach
        

    </tbody>

</table>