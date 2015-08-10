@if(isset($invite))
    {{ Form::model($invite, array('method'=>'put', 'route' => array('invites.update', $invite->id), 'class' => 'form-horizontal')) }}
@else
    {{ Form::open(['route' => 'invites.store', 'class' => 'form-horizontal']) }}
@endif

    <div class="form-group">
        {{ Form::label('name', "RSVP Name:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', "Email:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address', "Address:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::text('address', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('city', "City:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::text('city', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('state', "State:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::states('state', ((isset($invite) ? $invite->state : null)), ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('zip', "Zip:", ['class' => 'col-sm-2']) }}
        <div class="col-sm-10">
            {{ Form::text('zip', null, ['class' => 'form-control']) }}
        </div>
    </div>

    @if(isset($invite))
        @forelse($invite->guests as $num => $guest)
            <p>Guest #{{ $num++ }}</p>
            <div class="form-group">
                {{ Form::label('first_name' . $num, "First Name:", ['class' => 'col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::text('first_name' . $num, $guest->first_name) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('last_name' . $num, "Last Name:", ['class' => 'col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::text('last_name' . $num, $guest->last_name) }}
                    {{ Form::hidden('id' . $num, $guest->id) }}
                </div>
            </div>
        @empty
        <p>No guests</p>
        @endforelse
    @else

        @foreach([1, 2, 3, 4, 5] as $num)
            <p>Guest #{{ $num }}</p>
            <div class="form-group">
                {{ Form::label('first_name' . $num, "First Name:", ['class' => 'col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::text('first_name' . $num) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('last_name' . $num, "Last Name:", ['class' => 'col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::text('last_name' . $num) }}
                </div>
            </div>


        @endforeach
    @endif

    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </div>
{{ Form::close() }}