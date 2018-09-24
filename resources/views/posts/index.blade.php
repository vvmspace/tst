@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->text }}</div>
    @endforeach
@endsection