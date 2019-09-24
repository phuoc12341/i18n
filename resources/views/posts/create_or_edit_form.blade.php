
    <div class="form-group">
        {!! Form::label('title', __('messages.title')) !!}
        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => __('messages.enter_title')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', __('messages.content')) !!}
        {!! Form::text('content', null,['id' => 'content', 'class' => 'form-control', 'placeholder' => __('messages.enter_content')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', __('messages.description')) !!}
        {!! Form::text('description', null, ['id' => 'description', 'class' => 'form-control', 'placeholder' => __('messages.enter_description')]) !!}
    </div>

    {!! Form::submit( __('messages.submit'), ['class' => 'btn btn-primary']) !!}
