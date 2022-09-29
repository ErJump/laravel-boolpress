<form action="{{ route($route, $post->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group mb-4">
        <label for="title">Title</label>
        <input required name="title" type="text" class="form-control" id="title" placeholder="Enter title"
            value="{{old('title', $post->title)}}">
        @error('title')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="post_content">Content</label>
        <textarea name="post_content" id="post_content" cols="30" rows="10"
            class="form-control">{{old('post_content', $post->post_content)}}</textarea>
        @error('post_content')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="post_image">Image Url</label>
        <input required name="post_image" type="text" class="form-control" id="post_image" placeholder="Enter image url"
            value="{{old('post_image', $post->post_image)}}">
        @error('post_image')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label for="uploaded_image">Image Url</label>
        <input name="uploaded_image" type="file" class="form-control" id="uploaded_image"
            value="{{old('uploaded_image', $post->uploaded_image)}}">
        @error('uploaded_image')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mb-4">
        <label class="d-block">Tags</label>
        @foreach ($tags as $tag)
            <div class="form-check d-inline px-3">
                <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="{{$tag->name}}"
                @if($errors->any())
                {{in_array($tag->id, old('tags', [])) ? 'checked' : ''}}
                @else
                {{$post->tags->contains($tag) ? 'checked' : '' }}
                @endif> 
                <label class="form-check-label" for="{{$tag->name}}">
                {{$tag->name}}
                </label>
            </div>
        @endforeach
    </div>
    <div class="form-group mb-4">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{$category->id}}"
                {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>
                {{$category->name}}
            </option>
            @endforeach
            @error('catgory_id')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
        </select>
    </div>
    <div class="w-100 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>