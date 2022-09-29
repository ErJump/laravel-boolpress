@extends('layouts.app')
@section('title', 'Edit Tag')

@section('content')
    <div class="container-lg">
        @include('admin.tags.partials.tag-form', [
            'route' => 'admin.tags.update',
            'method' => 'PUT',
            'tag' => $tag,
        ])
    </div>
@endsection