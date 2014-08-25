@extends('layouts.default')


@section('content')
<div class="row">
    <div class="col-md-6">
        @include('guests.partials.create-guest-form')
    </div>

    <div class="col-md-6">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th>First</th>
                    <th>Last</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                @foreach($guests as $guest)
                    <tr>
                        <td>{{ $guest->first_name }}</td>
                        <td>{{ $guest->last_name }}</td>
                        <td>{{ $guest->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@stop