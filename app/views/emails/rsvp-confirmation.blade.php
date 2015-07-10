<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>RSVP Confirmation for {{ $invite->present()->guestSummary }}</h2>

<div>
    @foreach($invite->guests as $guest)
        {{ $guest->first_name }} {{ $guest->last_name }}: {{ $guest->attending ? 'Attending' : 'Not attending' }}<br/>
    @endforeach
</div>
</body>
</html>