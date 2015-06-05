@extends('layouts.default')

@section('sub-header')
    <div id="travel-header" class="center-block"></div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="/images/hotels-subheader.png" alt=""/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="media">
                <div class="media-left">
                    <a href="http://www.ihg.com/holidayinnexpress/hotels/us/en/minneapolis/mspdt/hoteldetail">
                        <img class="media-object hotel-image" src="/images/hie-downtown.jpg" alt="Holiday Inn Express Downtown">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Holiday Inn Express Downtown – accessible by bus</h4>
                    225 11th Street South, Minneapolis, MN 55403
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="http://www.marriott.com/hotels/travel/mspak-the-hotel-minneapolis-autograph-collection/">
                        <img class="media-object hotel-image" src="/images/thehotelmpls.jpg" alt="The Hotel Minneapolis">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">The Hotel Minneapolis – accessible by bus</h4>
                    215 4th Street South, Minneapolis, MN, 55401
                </div>
            </div>



        </div>

        <div class="col-md-5">
            <div class="media">
                <div class="media-left">
                    <a href="http://www.ihg.com/holidayinnexpress/hotels/us/en/bloomington/mspbm/hoteldetail">
                        <img class="media-object hotel-image" src="/images/hie-airport.jpg" alt="Holiday Inn Express Aiport">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Holiday Inn Express Airport</h4>
                    1601 East American Boulevard, Bloomington, MN 55425
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="http://homewoodsuites3.hilton.com/en/hotels/minnesota/homewood-suites-by-hilton-minneapolis-st-louis-park-at-west-end-MSPLPHW/index.html">
                        <img class="media-object hotel-image" src="/images/homewood-suites.jpg" alt="Homewood Suites">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Homewood Suites at the West End</h4>
                    5305 Wayzata Boulevard, Saint Louis Park, MN 55416
                </div>
            </div>
        </div>

    </div>

    <div class="row top-buffer">
        <div class="col-md-10 col-md-offset-1">

            <div class="media">
                <div class="media-left media-right">
                    <a href="https://www.airbnb.com/s/2715-Aldrich-Avenue-South--Minneapolis--MN--United-States?checkin=09%2F04%2F2015&checkout=09%2F07%2F2015&guests=2&source=bb&ss_id=yk43y209">
                        <img class="media-object" src="/images/airbnb-logo.png" alt="Airbnb" style="width: 200px;">
                    </a>
                </div>
                <div class="media-body">
                    {{--<h4 class="media-heading">Airbnb</h4>--}}
                    <p class="lead">
                        Since most hotels are somewhat far from both our home and Grand Café we also recommend using <a href="https://www.airbnb.com/s/2715-Aldrich-Avenue-South--Minneapolis--MN--United-States?checkin=09%2F04%2F2015&checkout=09%2F07%2F2015&guests=2&source=bb&ss_id=yk43y209">Airbnb</a> for lodging.  Let us know if you have any questions about any particular locations.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="/images/flying-subheader.png" alt=""/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <p class="lead">
                The most convenient airport for the wedding is the Minneapolis-Saint Paul Airport.  The airport and surrounding hotels have relatively easy public transit access to our house (the ceremony venue) during day-time hours.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="/images/attractions-subheader.png" alt=""/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <p class="lead">
                <h4>Out and About</h4>
                <ul>
                    <li>
                        The Minnesota Valley National Wildlife Refuge and Fort Snelling State Park are conveniently located near the MSP airport and the Mall of America if you stay near the airport.  Both provide excellent hiking.
                    </li>
                    <li>
                        Minneapolis is known as the “City of Lakes” and the Chain of Lakes located in South Minneapolis is truly lovely.  You can rent bikes, canoes, kayaks, and pedal boats at Lake Harriet (http://wheelfunrentals.com/Locations/Minneapolis-2) or Lake Calhoun (http://wheelfunrentals.com/Locations/Minneapolis).   Bikes can also be rented through the Nice Ride (https://www.niceridemn.org/how_it_works/) program where you can check out and return bikes to stations located throughout the Minneapolis.
                    </li>
                    <li>
                        Mill Ruins Park, Stone Arch Bridge, and the view from the infinity bridge at the the Guthrie Theater.
                    </li>
                </ul>
            </p>

            <p class="lead">
                <h4>Arts and Culture</h4>
                <ul>
                    <li>
                        Walker Art Center and sculpture garden are located near our home and the Artist Designed Mini Golf (http://www.walkerart.org/calendar/2015/walker-green-artist-designed-mini-golf-3) is truly a unique Minneapolis experience.  If you are interested in the Mini Golf, we recommend going as early as possible in the day since tee times fill up quickly and are assigned on a first-come, first-served basis.  Mini Golf passes can be used for museum admission as well.
                    </li>
                    <li>
                        The Minneapolis Institute of Art is free and awesome
                    </li>
                    <li>State Fair</li>
                </ul>
            </p>

            <p class="lead">
                <h4>Dining</h4>
                The Twin Cities boasts an amazing restaurant scene and we love taking advantage of all the options.  We’re happy to share some of our favorites with you:
                <ul>
                    <li>
                        <a href="http://www.112eatery.com">112 Eatery</a>: This is one of our favorite restaurants in the Cities and the menu varies from an amazing $10 cheese burger to tagliatelle with foie gras meatballs.  This is the restaurant that chefs eat at after their shift and the food is always stellar.
                    </li>
                    <li>
                        <a href="http://www.wiseacreeatery.com">Wise Acre Eatery</a>: Everything here is perfectly cooked and the entrees feel like complete, well thought out meals.  With only four entrees on the menu at a time, Wise Acre is constantly keeping up-to-date with what is seasonal and fresh on the farm that they own.  Finish it off with a blondie sundae made with homemade custard and you’ll be pleased as punch.<br/>
                        <em>Reservations Recommended</em>
                    </li>
                    <li>
                        <a href="http://burchrestaurant.com">Burch Steak</a>: Hands down the best steak we’ve ever had; we promise you’ll be dreaming of it for days.  It’s definitely a pricey restaurant but even cheaper cuts of steak are perfection.  Downstairs focuses on pizza and includes some of the most decadent pizzas we’ve ever seen.<br/>
                        <em>Reservations Recommended</em>
                    </li>
                    <li>
                        <a href="http://www.blackbirdmpls.com">Blackbird</a>: Just six blocks from our old apartment, this is a Cheney-Tape staple.  This is great for either brunch (Jess recommends the Steak and Eggs) or dinner (Sam recommends the Pork Spicy Peanut Noodles).<br/>
                        <em>Reservations only available for parties of six or more</em>
                    </li>
                    <li>
                        <a href="http://www.kyatchi.com">Kyatchi</a> is a new addition to the nightborhood and the lemon and salmon pressed sushi sake oshizushi is spectacular.  We love that all the fish is sustainably fished.  The ramen bowl is delicious and the hot dogs are awesome.
                    </li>

                    <li>
                        <a href="http://www.eatwsk.com">World Street Kitchen</a> This food truck turned restaurant has excellent food at very reasonable prices. Their MFC (moroccan fried chicken) sandwich is life-changing. If you're looking for some tasty eats late at night, this is your place.
                    </li>

                    <li>
                        <a href="http://www.quang-restaurant.com/">Quang</a> This is Jess and Sam's favorite Vietnamese food in the Twin Cities. The beef pho is immensely flavorful. Don't worry if the place looks busy, they're tables freeing up constantly.
                    </li>

                    <li>
                        <a href="http://www.punchpizza.com/">Punch Pizza</a> If you want a quick bite, Punch Pizza is a great bet. Their several locations around the cities make personal-sized wood-fired pizzas in the Neapolitan style. The Punch Salad is nice to split with a couple pizzas.
                    </li>

                    <li>
                        <a href="http://sebastianjoesicecream.com/">Sebastian Joe’s Ice Cream</a> When our sweet-tooth comes calling, we like to mosey on down to Sebastian Joe's for the best ice cream in Minneapolis. Jess loves the infamous 'Nicollet Ave Pothole' and Sam prefers the decadent and simple Oreo ice cream. Come relive Jess & Sam's first Valentine's Day date.
                    </li>
                </ul>
            </p>
        </div>
    </div>
@stop