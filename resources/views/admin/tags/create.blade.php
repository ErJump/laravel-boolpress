@extends('layouts.app')
@section('title', 'Create Tag')

@section('content')
    <div class="container-lg">
        @include('admin.tags.partials.tag-form', [
            'route' => 'admin.tags.store',
            'method' => 'POST'
        ])
    </div>
@endsection