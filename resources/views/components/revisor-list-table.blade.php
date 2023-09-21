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
        @foreach($revisorList as $user)
        <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>

        <td>
            <a href="{{route('admin.makeUserRevisor', $user)}}" class="btn btn-dark" style="color:yellow">Permessi Revisor</a>
            <a href="{{route('revisor.remove',$user)}}" class="btn btn-dark" style="color:yellow">Rimuovi permessi Revisor</a>
        </td>
        <td>
            @if($user->is_revisor==true)
             <span style="color:green">Accettato</span>
            @endif

            @if($user->is_revisor==false)
            <span style="color:red">Rifiutato</span>
            @endif

        </td>
        </tr>
        @endforeach
    </tbody>
</table>