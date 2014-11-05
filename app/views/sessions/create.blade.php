@extends('layouts.default')

@section('content')
<div class="col-md-6">

    @include('layouts.partials.errors')

    {{ Form::open(['method'=>'post', 'route' => 'sessions.create']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control', 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Log in', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}
</div>


@stop