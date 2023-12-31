<form method="POST" action="{{ route('article.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label"> {{__('ui.title')}} </label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">{{__('ui.description')}}</label>
        <input type="text" name="description" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">{{__('ui.category')}}</label>
    <select name="category_id" id="" class="form-control" required>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name }}</option>
        @endforeach


    </select>
    </div>

    <div class="mb-3">
        <label class="form-label">{{__('ui.image')}}</label>
        <input type="file" name="immagine" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">{{__('ui.body')}}</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control" required >
        </textarea>
    </div>
    <button type="submit" class="btn btn-dark" style="color:yellow">Submit</button>

    <div class="mb-3">
        <label class="form-label">{{__('ui.tag')}}</label>
        <select name="tags[]" class="form-control" required multiple>
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    
</form>