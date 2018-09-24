@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @auth()
                {!! Form::open(['route' => 'post.store']) !!}
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title') !!}
                {!! Form::close() !!}
                @endauth
                @guest()
                    <h2>You have no access here</h2>
                @endguest
            </div>
        </div>
    </div>
@endsection