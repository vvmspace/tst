@extends('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-md-12">@section('content')
    @forelse($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->text }}</div>
        @empty
            <h2>No content</h2>
    @endforelse
@endsection</div>
    </div>
</div>