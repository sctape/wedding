<div class="container">
    {{  Navigation::pills([
        [
            'title' => 'Home',
            'link' => route('home')
        ],
        [
            'title' => 'RSVP',
            'link' => route('rsvp_path')
        ],
        [
            'title' => 'Locations',
            'link' => route('locations')
        ],
        [
            'title' => 'Registry',
            'link' => route('registry')
        ],
        [
            'title' => 'Events',
            'link' => route('events')
        ],
        [
            'title' => 'Guests',
            'link' => route('guests_path')
        ],
    ], ['class' => 'wedding-nav']) }}
</div>