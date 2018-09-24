@extends('layouts.app')

@section('content')<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $post->title }}
            </h1>
            <div class="body">
                {{ $post->body }}
            </div>
            @foreach($post->tags as $tag)
                {{ $tag->name }}
                @auth()
                {!! Form::open( ['method' => 'delete', 'url' => route('tag.destroy', ['tag' => $tag->id]), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Вы уверены, что хотите удалить?")']) !!}
                <button type="submit" class="btn btn-danger">[x]</button>
                {!! Form::close() !!}
                @endauth
            @endforeach
        </div>
    </div>
</div>
@endsection


