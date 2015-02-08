<nav class="navbar-fixed-bottom bottom-nav">
  <div class="container">
        <div id="footer-img" class="center-block">
            <a href="{{ route('events') }}" id="events-link" class="nav-hover-buttons"></a>
            <a href="{{ route(Auth::check() ? 'invites.index' : 'rsvp_path') }}" id="rsvp-link" class="nav-hover-buttons"></a>
            <a href="{{ route('home') }}" id="home-link" class="nav-hover-buttons"></a>
            <a href="#" id="registry-link" class="nav-hover-buttons"></a>
            <a href="{{ route('locations') }}" id="travel-link" class="nav-hover-buttons"></a>
        </div>
  </div>
</nav>