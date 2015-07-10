<nav class="navbar-fixed-bottom bottom-nav">
  <div class="container">
        <div id="footer-img" class="center-block">
            <a href="{{ route('events') }}" id="events-link" class="nav-hover-buttons"></a>
            <a href="{{ route(Auth::check() ? 'invites.index' : 'rsvp_no_name') }}" id="rsvp-link" class="nav-hover-buttons"></a>
            <a href="{{ route('story') }}" id="home-link" class="nav-hover-buttons"></a>
            <a href="{{ route('registry')}}" id="registry-link" class="nav-hover-buttons"></a>
            <a href="{{ route('travel') }}" id="travel-link" class="nav-hover-buttons"></a>
        </div>
  </div>
</nav>