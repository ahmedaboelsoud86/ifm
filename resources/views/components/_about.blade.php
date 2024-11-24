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
                  <h3 class="timer" data-to="{{ $about->number_of_years  }}" data-speed="1500"> </h3><span>+</span>
                </div>
                <p>@lang("site.years_of_experience")</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 item">
            <div class="w-100"><span class="tag">@lang("site.about_company")</span>
              @if($about->title)
              <h1 class="title">{{ Str::words($about->title , 4,'')  }}</h1>
              <p> {{ Str::words($about->description, 45, ' ...') }}</p><a class="bottom" href="{{ route('aboutus')}}"><span>@lang("site.read_more")</span></a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section><!--End minabout-->
    @endif