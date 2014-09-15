@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-10">
        @include('invites.partials.create-invite-form')
    </div>
</div>
@stop