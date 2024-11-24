@extends('front.pages_template')
@section('title')
    @lang('site.clients')
@endsection
@section('content')
<section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
    <div class="container">
      <h1 class="title">@lang('site.clients')</h1>
      <ul class="maplink">
        <li><a href="{{ route('home') }}}">@lang('site.home')</a></li>
        <li>@lang('site.clients') </li>
      </ul>
    </div>
</section>
<section class="clients">
    <div class="container"><span class="tag text-center mb-2">   @lang('site.clients')</span>
      <h2 class="title text-center">    @lang('site.our_latest_clients')</h2>
      <div class="row">
        @if($clients)
        @foreach($clients as $cli) 
        <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/'.$cli->photos->image) }}" alt=""></a></div>
        @endforeach
        @endif
      </div>
    </div>
  </section>

@endsection


