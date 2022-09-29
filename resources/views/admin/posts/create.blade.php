@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="container-lg">
        <h2 class="mb-3">Create Post</h2>
        <div class="row">
            <div class="col-12">
                @include('admin.posts.partials.post-form', [
                    'route' => 'admin.posts.store',
                    'method' => 'POST',
                ])
            </div>
        </div>
    </div>
@endsection