@extends('layouts.default')

@section('content')
<div class="row">
    <p class="pull-right">
        {{ link_to_route('invites.create', "Add an invite!", [], ['class'=>"btn btn-primary btn-md active", 'role'=>"button"]) }}
    </p>
    <div class="media-list">
        @foreach($invites as $invite)
            <div class="media {{ $invite->rsvp ? "bg-success" : ($invite->notAttending() ? "bg-danger" : "") }}">
                <a class="pull-left" href="{{ route('invites.edit', ['id' => $invite->id]) }}">
                    <img style="width: 30px;" class="media-object" src="/images/guest.png" alt="...">
                </a>
                <div class="media-body">
                    <a href="{{ route('invites.edit', ['id' => $invite->id]) }}"><h4 class="media-heading">{{ $invite->present()->guestSummary }}</h4></a>
                    <address>
                        {{ $invite->present()->addressSummary }}
                    </address>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop