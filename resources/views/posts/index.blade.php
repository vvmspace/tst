@extends('layouts.app')

@section('content')
    @forelse($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->text }}</div>
        @else
            <h2>No content</h2>
    @endforelse
@endsection