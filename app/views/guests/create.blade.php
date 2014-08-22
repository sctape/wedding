@extends('layouts.default')


@section('content')

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('first_name', "First Name:") }}
            {{ Form::text('first_name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('last_name', "Last Name:") }}
            {{ Form::text('last_name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', "Email:") }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('address', "Address:") }}
            {{ Form::text('address', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', "City:") }}
            {{ Form::text('city', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', "City:") }}
            {{ Form::text('city', null, ['class' => 'form-control']) }}
        </div>
    </div>

@stop