@extends('layouts.app')
@section('title', 'Tags Index')

@section('content')
    <div class="container-lg">
        @if (session('result-message'))
            <div class="alert alert-warning" role="alert">
                <strong>{{session('result-message')}}</strong> 
            </div>
        @endif
        <h3 class="mb-4">Tags:</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"><strong>Edit</strong></th>
                    <th scope="col"><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td><a href="{{route('admin.tags.show', $tag->id)}}">{{$tag->id}}</a></th>
                        <td>{{$tag->name}}</td>
                        <td>
                            <a href="{{route('admin.tags.edit', $tag->id)}}">
                                <button type="button" class="btn btn-secondary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.tags.destroy', $tag->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection