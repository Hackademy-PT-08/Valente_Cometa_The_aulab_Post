<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> {{__('ui.category')}} </th>
            <th scope="col"> {{__('ui.article')}} </th>
            <th scope="col"> {{__('ui.edit')}} </th>
            <th scope="col"> {{__('ui.delete')}} </th>
        </tr>
    </thead>
    <tbody>

        @foreach($categories as $category)

     
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{count($category->articles)}}</td>
            
            <td>
                
                <form action="{{route('category.edit', $category)}}" method="post" class="w-50">
                    @csrf
                    <input type="text" class="form-control" placeolder="nuovo nome" name="name">
                    <button class="btn btn-dark" type="submit"  style="color:yellow"> {{__('ui.save')}} </button>
                </form>
           
            </td>
            <td>
                <form action="{{route('category.delete', $category)}}" class="w-50" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark" type="submit"  style="color:yellow"> {{__('ui.delete')}} </button>
                   
                </form>
           
            </td>
       
        </tr>
        @endforeach
    
</tbody>

</table>
