@extends('layouts.default')

@section('sub-header')
    <div id="rsvp-header" class="center-block"></div>
@stop

@section('content')

    @if(isset($invite))
        <div class="row">
            @if($invite->rsvp)
                <p class="lead">Thanks for RSVPing!</p>
            @else
                @include('rsvp.partials.rsvp-form')
            @endif
        </div>

    @else
        <div class="row">
            {{ Form::open(['class' => 'form-horizontal']) }}
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::text('user', null, ['class' => 'form-control', 'placeholder' => 'Search for your RSVP']) }} {{ Form::submit('Go!', ['class' => 'btn btn-primary']) }}
                </div>
                <div class="col-md-4">
                </div>
            </div>

            {{ Form::close() }}
        </div>
    @endif



@stop

@section('javascript')
    <script>
        var rsvpNames = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
//            prefetch: '../data/films/post_1960.json',
            remote: {
                url: '/guests/search/%QUERY',
                wildcard: '%QUERY'
            }
        });

        $('input[name="user"]').typeahead(null, {
            name: 'best-pictures',
            display: 'value',
            limit: 20,
            source: rsvpNames
        });
    </script>
@stop