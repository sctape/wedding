@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-10">

        <p>
            {{ link_to_route('invites.create', "Add an invite!", [], ['class'=>"btn btn-primary btn-md active", 'role'=>"button"]) }}
        </p>
        <div class="media-list">
            @foreach($invites as $invite)
                <div class="media">
                    <a class="pull-left" href="{{ route('invites.edit', ['id' => $invite->id]) }}">
                        <img style="width: 30px;" class="media-object" src="/images/guest.png" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $invite->present()->guestSummary }}</h4>
                        <address>
                            {{ $invite->present()->addressSummary }}
                        </address>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@stop