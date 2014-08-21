@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('plus_one', '+ 1') }}
            {{ Form::text('plus_one', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('protein', 'Choose your protein') }}
            <ul>
                <li>{{ Form::checkbox('food[]', 1) }} {{ Form::label('beef', 'Beef') }}</li>
                <li>{{ Form::checkbox('food[]', 1) }} {{ Form::label('chicken', 'Chicken') }}</li>
                <li>{{ Form::checkbox('food[]', 1) }} {{ Form::label('pork', 'Pork') }}</li>
                <li>{{ Form::checkbox('food[]', 1) }} {{ Form::label('vegetarian', 'Vegetarian') }}</li>
            </ul>
        </div>
    </div>

</div>

@stop