@extends('layouts.app')
@section('title', $tag->name)

@section('content')
    <div class="container-lg pt-3">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{route('admin.tags.edit', $tag->id)}}" class="d-inline">
                    <button type="button" class="btn btn-secondary">Edit</button>
                </a>
                <form action="{{ route('admin.tags.destroy', $tag->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <div class="col-12">
                <h2 class="mb-3 text-primary"># {{$tag->name}}</h2>
                <h5>Related Posts:</h5>
                    @forelse ($tag->posts as $post)
                    <li>
                        <a href="{{route('admin.posts.show', $post->slug)}}">{{$post->title}}</a>
                    </li>
                    @empty
                    <span>No posts</span>    
                    @endforelse
                </ul>
            </div>
            
        </div>
    </div>
@endsection