@extends('posts.layout')

@section('content')
    <div class="container">
        {!! Form::open(['route' => ['posts.store']]) !!}
            {!! Form::hidden('postId', $postId) !!}

            @component('posts.create_or_edit_form')

            @endcomponent
        {!! Form::close() !!}
    </div>
@endsection
