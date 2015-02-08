@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-xs-push-2 col-xs-8">
        @include('invites.partials.create-invite-form')
    </div>
</div>
@stop