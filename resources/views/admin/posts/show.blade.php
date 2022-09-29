@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-4">
                <img  class="img-fluid" src="{{$post->post_image}}" alt="{{$post->title}}">
            </div>
            <div class="col-8">
                <h2 class="mb-3">{{$post->title}}</h2>
                <p>{{$post->post_content}}</p>
                <div class="mb-3">
                    <strong>Category:</strong> <span class="badge badge-secondary" style="background-color: {{$post->category->color}}">{{$post->category->name}}</span>
                </div>
                <div class="mb-3">
                    <strong>Tags:</strong>
                    @forelse ($post->tags as $tag)
                    <span class="text-primary">
                        <a href="{{route('admin.tags.show', $tag->id)}}">#{{$tag->name}}</a> 
                    </span>
                    @empty
                    <span>No tags</span>    
                    @endforelse ()
                </div>
                <p><strong>Author:</strong> {{$post->user->name}}</p>
                <p><strong>Post Date:</strong> {{$post->post_date}}</p>
            </div>
            <div class="col-12">
                <h5>Related image</h5>
                <img class="img-fluid" src="{{ asset('/storage' . '/' . $post->uploaded_image) }}" alt="">
            </div>
            <div class="col-12 text-center">
                <a href="{{route('admin.posts.edit', $post->slug)}}" class="d-inline">
                    <button type="button" class="btn btn-secondary">Edit</button>
                </a>
                <form action="{{ route('admin.posts.destroy', $post->slug)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection