@extends('layouts.default')

@section('sub-header')
    <div id="events-header" class="center-block"></div>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="fluid-wrapper">
                {{--<iframe src="https://mapsengine.google.com/map/embed?mid=zfr7iFEdZ-m0.kVIyKVO9-FbA" width="640" height="480"></iframe>--}}
                {{--<iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/salmonjess.mm0i0loi/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1Ijoic2FsbW9uamVzcyIsImEiOiJJMFZSelVJIn0.z7KnZZyOYKEAkcurxN2CJg'></iframe>--}}
                <iframe width='100%' height='500px' frameBorder='0' src='https://api.tiles.mapbox.com/v4/salmonjess.mm0i0loi/page.html?access_token=pk.eyJ1Ijoic2FsbW9uamVzcyIsImEiOiJJMFZSelVJIn0.z7KnZZyOYKEAkcurxN2CJg#14/44.9464/-93.3078'></iframe>
            </div>
        </div>

    </div>
@stop