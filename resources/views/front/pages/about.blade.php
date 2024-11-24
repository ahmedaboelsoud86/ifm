@extends('front.pages_template')
@section('title')
    @lang('site.aboutus')
@endsection
@section('content')
<section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
    <div class="container">
      <h1 class="title"> @lang('site.aboutus')</h1>
      <ul class="maplink">
        <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
        <li>@lang('site.aboutus')  </li>
      </ul>
    </div>
</section>
@if($about)
<section class="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 item">
          <div class="tp-about">
            <div class="tp-about-3"><img src="{{ asset('assets/images/'.$about->frist_image) }}" alt="{{ $about->title }}"></div>
            <div class="tp-about-4"><img src="{{ asset('assets/images/'.$about->second_image) }}" alt="{{ $about->title }}"></div>
            <div class="tp-about-2-thumb-text">
              <div class="num">
                <h3 class="timer" data-to="12" data-speed="1500"> </h3><span>+</span>
              </div>
              <p>{{ $about->number_of_years }}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 item">
          <div class="w-100"><span class="tag">@lang('site.about_company')</span>
            <h1 class="title">{{ $about->title  }}</h1>
            <p> {{ $about->description, 40 }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <section class="numbers">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 item">
          <div class="flex">
            <h3 class="timer" data-to="152" data-speed="15000"></h3><span>+    </span>
          </div>
          <h4 class="title">@lang('site.completed_projects')</h4>
        </div>
        <div class="col-sm-4 item">
          <div class="flex">
            <h3 class="timer" data-to="43" data-speed="15000"></h3><span>+  </span>
          </div>
          <h4 class="title">@lang('site.company_partners')</h4>
        </div>
        <div class="col-sm-4 item">
          <div class="flex">
            <h3 class="timer" data-to="5000" data-speed="15000"> </h3><span>+  </span>
          </div>
          <h4 class="title">@lang('site.company_employees')</h4>
        </div>
      </div>
    </div>
  </section><!--End provide-->
  <section class="aboutinner">
    <div class="container"><span class="tag text-center mb-2">@lang('site.why_choose_us')</span>
      <h2 class="title text-center">@lang('site.integrated_facility')</h2>
      <div class="row">
        <div class="col-sm-3 item">
          <div class="inner">
            <div class="icon"><img src="{{ asset('assets/images/tw.svg') }}" alt="" title=""></div>
            <h3 class="title">  Mission</h3>
            <p> To transform facilities into sustainable, efficient spaces through innovative integrated management.</p>
          </div>
        </div>
        <div class="col-sm-3 item">
          <div class="inner">
            <div class="icon"><img src="{{ asset('assets/images/vision.svg') }}" alt="" title=""></div>
            <h3 class="title">Visions</h3>
            <p> A future where every facility coexists harmoniously with nature.An ecosystem of seamless collaboration between technology and services.</p>
          </div>
        </div>
        <div class="col-sm-3 item">
          <div class="inner">
            <div class="icon"><img src="{{ asset('assets/images/ingots.svg') }}" alt="" title=""></div>
            <h3 class="title">    Advantages</h3>
            <p> Streamlined operations that drive enhanced efficiency. Commitment to sustainability that minimizes environmental impact. Expert management ensuring superior quality and performance.</p>
          </div>
        </div>
        <div class="col-sm-3 item">
          <div class="inner">
            <div class="icon"><img src="{{ asset('assets/images/target.svg') }}" alt="" title=""></div>
            <h3 class="title">Values</h3>
            <p> Integrity in all our interactions, innovation at the heart of our solutions, collaboration with clients and partners for mutual success, and excellence in service delivery and outcomes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="provide">
    <div class="item">
      <div class="photo"><img src="{{ asset('assets/images/p-1.jpg') }}" alt=""></div>
      <div class="content">
        <h2 class="title"> @lang('site.do_you_need_services')</h2><a class="bottom" href="{{ route('contact_us')}}"><span>@lang('site.contact_us')</span></a>
      </div>
    </div>
    <div class="item">
      <div class="img"><img src="{{ asset('assets/images/p-2.jpg') }}" alt=""></div>
      <div class="innertext">
        <div>
          <h3 class="title">@lang('site.we_are_distinguished')</h3>
          <div class="itemvad"> <a class="bla-2 cd-single-point" href="https://youtu.be/W0eotRB4pBQ?si=gF9CnV8IRBbFGAVJ"> <i class="innerbc">
                <svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.835352 0.998526C0.479041 1.20118 0.258911 1.57953 0.258911 1.98921V26.9983C0.258911 27.6277 0.769257 28.1379 1.3985 28.1379C2.02774 28.1379 2.53809 27.6277 2.53809 26.9983V3.99394L19.4103 14.0381L7.00319 22.0317C6.47423 22.3727 6.32152 23.0779 6.66245 23.6069C7.00356 24.136 7.70859 24.2887 8.23774 23.9476L22.191 14.9576C22.5227 14.7439 22.7202 14.3739 22.7132 13.9794C22.7061 13.5849 22.4957 13.2221 22.1567 13.0203L1.9814 1.00992C1.62889 0.800427 1.19166 0.795869 0.835352 0.998526Z" fill="#fff"></path>
                </svg></i></a></div>
        </div>
      </div>
    </div>
  </section><!--End provide-->
  @if($clients)
  <section class="clients">
    <div class="container"><span class="tag text-center mb-2">@lang('site.clients')</span>
      <h2 class="title text-center">@lang('site.our_latest_clients')</h2>
      <div class="row">
          @foreach ($clients as $cli)
              <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/'.$cli->photos?->image) }}" alt=""></a></div>
          @endforeach
      </div>
    </div>
  </section><!-- End clients--><!--End minclients-->
  @endif
@endsection


