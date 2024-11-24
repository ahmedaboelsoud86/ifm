@extends('front.pages_template')
@section('title')
    Messages
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
        <div class="container">
            <h1 class="title">Oops 404</h1>
            <ul class="maplink">
                <li><a href="index.html">home</a></li>
                <li>Oops 404</li>
            </ul>
        </div>
    </section>
    <section class="textmessage">
        <div class="container">
            <div class="textcenter mt-0">
                <div class="w-100 text-center mt-0">
                    <h1 class="title">Oops!</h1>
                    <p class="textlight">Lorem ipsum dolor sit amet consectetur. Nisl sit pharetra pulvinar amet elementum.
                        Arcu eu elit tortor accumsan. Massa lacus cursus ut congue in ultrices. Justo vulputate quis quis
                        leo tristique suspendisse lacus sit. Scelerisque molestie elementum sem id etiam placerat non
                        viverra.</p><a class="bottom" href="index.html"><span>Back</span> </a>
                </div>
            </div>
        </div>
    </section>
@endsection
