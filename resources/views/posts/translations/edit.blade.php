@extends('posts.layout')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-post-title="{{ $postTranslation->title }}" data-post-id="{{ $postTranslation->id }}" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button>

        {!! Form::model($postTranslation, ['route' => ['postTranslations.update', 'postTranslation' => $postTranslation->id], 'method' => 'patch' ]) !!}

            @component('posts.create_or_edit_form')

            @endcomponent
        {!! Form::close() !!}

    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('messages.are_you_sure_to_delete_this_post') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <span>{{ __('messages.title') }}: {{ $postTranslation->title }}</span>  
                    <span id="modalData"></span>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.no') }}</button>
                        {!! Form::open(['route' => ['postTranslations.destroy',  'postTranslation' => $postTranslation->id], 'method' => 'delete']) !!}
                            {!! Form::submit( __('messages.yes'), ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
