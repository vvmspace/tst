@extends('layouts.app')

@section('content')<div class="container">
    <div class="row">
        <div class="col-md-12">

                @forelse($posts as $post)
                    <h2>{{ $post->title }}</h2>
                    <div>{{ $post->text }}</div>
                @empty
                    <h2>No content</h2>
                @endforelse

        </div>
    </div>
</div>
@endsection