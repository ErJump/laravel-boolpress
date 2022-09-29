@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="container-lg">
        <h2 class="mb-3">Edit Post</h2>
        <div class="row">
            <div class="col-12">
                @include('admin.posts.partials.post-form', [
                    'route' => 'admin.posts.update',
                    'method' => 'PUT',
                ])
            </div>
        </div>
    </div>
@endsection