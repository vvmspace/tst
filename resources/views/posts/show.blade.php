@extends('layouts.app')

@section('content')<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($post->tags as $tag)
                {{ $tag->name }}        {!! Form::open( ['method' => 'delete', 'url' => route('tag.destroy', ['tag' => $tag->id]), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Вы уверены, что хотите удалить?")']) !!}
                <button type="submit" class="btn btn-danger rb">[x]</button>
                {!! Form::close() !!}
            @endforeach
        </div>
    </div>
</div>
@endsection


