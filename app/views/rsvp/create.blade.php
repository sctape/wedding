@extends('layouts.default')

@section('sub-header')
    <div id="rsvp-header" class="center-block"></div>
@stop

@section('content')

<div class="row">
    @if($invite->rsvp)
        <p class="lead">Thanks for RSVPing!</p>
    @else
        @include('rsvp.partials.rsvp-form')
    @endif
</div>



@stop