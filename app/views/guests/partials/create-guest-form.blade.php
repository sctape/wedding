{{ Form::open(['route' => 'guests_path']) }}

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
        {{ Form::label('state', "State:") }}
        {{ Form::states('state', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('zip', "Zip:") }}
        {{ Form::text('zip', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}