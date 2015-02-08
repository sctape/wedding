@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
        @include('invites.partials.create-invite-form', ['invite' => $invite])
    </div>
</div>
@stop