
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Articoli</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
            
        </tr>
    </thead>
    <tbody>

        @foreach($tags as $tag)

     
        <tr>
            <th scope="row">{{$tag->id}}</th>
            <td>{{$tag->name}}</td>
            <td>{{count($tag->articles)}}</td>
            
            <td>
                
                
                   
                    
               
                <form action="{{route('tag.edit', $tag)}}" method="post" class="w-50">
    @csrf
    
    <div class="d-flex d-inline">
    <input type="text" class="form-control" placeolder="nuovo nome" name="name">
                    <button class="btn btn-info mx-5" type="submit">Salva</button>
    </div>
</form>

            </td>
            <td>
                <form action="{{route('tag.delete', $tag)}}" class="w-50" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                   
                </form>
           
            </td>
       
        </tr>
        @endforeach
    
</tbody>

</table>
