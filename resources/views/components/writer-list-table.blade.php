<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($writerList as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>
            <a href="{{route('admin.makeUserWriter', $user)}}" class="btn btn-dark"  style="color:yellow">Permessi Writer</a>
            <a href="{{route('writer.remove',$user)}}" class="btn btn-dark"  style="color:yellow">Rimuovi permessi Scrittore</a>
        </td>
        <td>
            @if($user->is_writer==true)
             <span style="color:green">Accettato</span>
            @endif

            @if($user->is_writer==false)
            <span style="color:red">Rifiutato</span>
            @endif

        </td>
        </tr>
        @endforeach
        

    </tbody>

</table>