<form action="{{ route($route, $tag->id) }}" method="POST">
    @csrf
    @method($method)
    <div class="form-group mb-4">
        <label for="name">Name</label>
        <input required name="name" type="text" class="form-control" id="name" placeholder="Enter name"
            value="{{old('name', $tag->name)}}">
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="w-100 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>