<form method="POST" action="{{ route('article.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
    <select name="category_id" id="" class="form-control" required>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name }}</option>
        @endforeach


    </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="immagine" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control" >
        </textarea>
    </div>
    <button type="submit" class="btn btn-dark" style="color:yellow">Submit</button>

    <div class="mb-3">
        <label class="form-label">Tags</label>
        <select name="tags[]" class="form-control" multiple>
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    
</form>