<div class="container">
<ul class="nav nav-pills wedding-nav" role="tablist">
  <li class="{{ URL::current() == URL::route('home') ? "active" : "" }}">{{ link_to_route('home', 'Home') }}</li>
  <li class="{{ URL::current() == URL::route('rsvp_path') ? "active" : "" }}">{{ link_to_route('rsvp_path', 'RSVP') }}</li>
  <li class="{{ URL::current() == URL::route('locations') ? "active" : "" }}">{{ link_to_route('locations', 'Locations') }}</li>
  <li class="{{ URL::current() == URL::route('registry') ? "active" : "" }}">{{ link_to_route('registry', 'Registry') }}</li>
  <li class="{{ URL::current() == URL::route('events') ? "active" : "" }}">{{ link_to_route('events', 'Events') }}</li>
</ul>
</div>
