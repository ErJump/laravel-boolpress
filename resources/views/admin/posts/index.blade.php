@extends('layouts.app')
@section('title', 'Posts Index')

@section('content')
    <div class="container-lg">
        <h3 class="mb-4">Posts:</h3>
        @if (session('result-message'))
            <div class="alert alert-warning" role="alert">
                <strong>{{session('result-message')}}</strong> 
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col" colspan="2">Title</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Category</th>
                    <th scope="col"><strong>Edit</strong></th>
                    <th scope="col"><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="{{route('admin.posts.show', $post->slug)}}">{{$post->id}}</a></th>
                        <td>{{$post->user->name}}</td>
                        <td colspan="2">{{$post->title}}</td>
                        <td>{{$post->post_date}}</td>
                        <td>
                            <span class="badge badge-secondary" style="background-color: {{$post->category->color}}">{{$post->category->name}}</span>
                        </td>
                        <td>
                            <a href="{{route('admin.posts.edit', $post->slug)}}">
                                <button type="button" class="btn btn-secondary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->slug)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
@endsection