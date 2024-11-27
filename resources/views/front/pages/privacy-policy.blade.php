@extends('front.pages_template')
@section('title')
    @lang('site.privacy_policy')
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/slider/img2.jpg ') }}" alt="">
        <div class="container">
            <h1 class="title">@lang('site.privacy_policy')</h1>
            <ul class="maplink">
                <li><a href="{{ route('home')}}">@lang('site.home')</a></li>
                <li>@lang('site.privacy_policy') </li>
            </ul>
        </div>
    </section>
    <section class="privacy-policy">
        <div class="container">
            @if($privacy)
            <p>{{ $privacy->description }}</p>
            @endif
        </div>
    </section>
@endsection
