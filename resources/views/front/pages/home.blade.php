<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Lorem PugJs">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="keywords" content="">
    <title>@lang('site.integrated_facility')  | @lang('site.home')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @if(LaravelLocalization::getCurrentLocale() == "ar")
      <link rel="stylesheet" href="{{ asset('assets/css/home-rtl.css') }}">
    @endif
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&amp;amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/grt-youtube-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
  </head>
  <body>
    @include('components._header')
    @include('components._slider')
    @include('components._about')
    @include('components._minservices')
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
    </section><!--End numbers-->
    @include('components._articles')
    <section class="provide">
      <div class="item">
        <div class="photo"><img src="{{ asset('assets/images/p-1.jpg') }}" alt=""></div>
        <div class="content">
          <h2 class="title"> @lang('site.do_questions')</h2><a class="bottom" href="{{route('contact_us')}}"><span> @lang('site.contact_us')</span></a>
        </div>
      </div>
      <div class="item">
        <div class="img"><img src="{{ asset('assets/images/p-2.jpg') }}" alt=""></div>
        <div class="innertext">
          <div>
            <h3 class="title">@lang('site.project_strategy')</h3>
            <div class="itemvad"> <a class="bla-2 cd-single-point" href="https://youtu.be/W0eotRB4pBQ?si=gF9CnV8IRBbFGAVJ"> <i class="innerbc">
                  <svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.835352 0.998526C0.479041 1.20118 0.258911 1.57953 0.258911 1.98921V26.9983C0.258911 27.6277 0.769257 28.1379 1.3985 28.1379C2.02774 28.1379 2.53809 27.6277 2.53809 26.9983V3.99394L19.4103 14.0381L7.00319 22.0317C6.47423 22.3727 6.32152 23.0779 6.66245 23.6069C7.00356 24.136 7.70859 24.2887 8.23774 23.9476L22.191 14.9576C22.5227 14.7439 22.7202 14.3739 22.7132 13.9794C22.7061 13.5849 22.4957 13.2221 22.1567 13.0203L1.9814 1.00992C1.62889 0.800427 1.19166 0.795869 0.835352 0.998526Z" fill="#fff"></path>
                  </svg></i></a></div>
          </div>
        </div>
      </div>
    </section><!--End provide-->
    @include('components._clients')
    @include('components._footer')
  </body>
</html>
