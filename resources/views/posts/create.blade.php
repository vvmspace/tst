@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @auth()
                {!! Form::open(['route' => 'post.store']) !!}
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['class' => 'form-control']) !!}
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
                {!! Form::label('tags_text', 'Tags') !!}
                {!! Form::text('tags_text', '', ['class' => 'form-control']) !!}
                {!! Form::submit('Submit') !!}
                {!! Form::close() !!}
                @endauth
                @guest()
                    <h2>You have no access here</h2>
                @endguest
            </div>
        </div>
    </div>
@endsection