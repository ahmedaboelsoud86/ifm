@extends('front.pages_template')
@section('title')
    {{ $facility->title }}
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
        <div class="container">
            <h1 class="title"> {{ $facility->title }}</h1>
            <ul class="maplink">
                <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                <li><a href="{{ route('services') }}">@lang('site.services_solutions')</a></li>
                <li> {{ $facility->title }}</li>
            </ul>
        </div>
    </section>
    <section class="servicesiner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item">
                    <div class="photo"><img src="{{ asset('assets/images/'.$facility->image) }}" alt="{{ $facility->title }}"></div>
                </div>
                <div class="col-sm-6 item">
                    <div><span class="tag mb-2">@lang('site.professionalism')</span>
                        <h2 class="title">{{ $facility->title }}</h2>
                        <p>{{ $facility->description }}<br><br>@lang('site.contact_our_specialist')</p><a
                            class="bottom" href="{{ route('contact_us') }}"><span> @lang('site.lets_talk')</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="minservices">
        <div class="container">
            <h2 class="title text-center">@lang('site.more_power')</h2>
            <p class="text-center mt-3">@lang('site.whatever_your_organisation')</p>
            <div class="powertabs">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    @if($categories)
                    @foreach($categories as $index=>$cat)
                    <li class="nav-item"> <a class="nav-link {{ $index == "0" ? "active show" : " " }}" id="item-{{$index+1}}-tab" data-toggle="tab" href="#item-{{$index+1}}"
                            role="tab" aria-controls="item-{{$index+1}}" aria-selected="{{ $index == "0" ? "true" : " " }}"> {{ $cat->title }}</a></li>
                    @endforeach        
                    @endif        
                </ul>
                <div class="tab-content" id="myTabContent">

                    @if($categories)
                    @foreach($categories as $index=>$cat)
                    <div class="tab-pane fade  {{ $index == "0" ? "active show" : " " }} " id="item-{{$index+1}}" role="tabpanel" aria-labelledby="item-{{$index+1}}-tab">
                        <div class="row">
                            <div class="col-sm-6 iteminner">
                                <div>
                                    <h2 class="title">{{ $cat?->facility?->title }}</h2>
                                    <p>{{ $cat?->facility?->description }} .<br><br>@lang('site.contact_our_specialist') </p><a class="bottom"
                                        href="#"><span> @lang('site.download_our_mini_guide')</span></a>
                                </div>
                            </div>
                            <div class="col-sm-6 iteminner">
                                <div class="photo"><img src="{{ asset('assets/images/'.$cat?->facility?->image) }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    @endforeach        
                    @endif 

                </div>
            </div>
        </div>
    </section>
    <section class="faqs n-bg">
        <div class="container">
            <h2 class="title text-center">@lang('site.power_services​')​</h2>
            <p class="text-center mt-3"> @lang('site.energy_requirements') </p>
            <div class="accordion mt-5" id="accordionExample">
               
                @if($power_services)
                @foreach ($power_services as $index=>$ps)
                <div class="option">
                    <div class="click-title" id="heading{{$index+1}}"><a class="d-block position-relative collapsible-link"
                            href="#" data-toggle="collapse" data-target="#collapse{{$index+1}}" aria-expanded="false"
                            aria-controls="collapse{{$index+1}}"> {{ $ps->title }} ?</a></div>
                    <div class="collapse" id="collapse{{$index+1}}" aria-labelledby="heading{{$index+1}}" data-parent="#accordionExample">
                        <p class="text">{{ $ps->description }}</p>
                    </div>
                </div>
                @endforeach
                @endif
                
            </div>
        </div>
    </section>
    <section class="awards">
        <div class="container"><span class="tag text-center mb-2">@lang('site.awards')</span>
            <h2 class="title text-center">@lang('site.awards_and_accreditations')</h2>
            <div class="row">
                @if($awards)
                    @foreach($awards as $awa)
                            <div class="col-sm-3 item"><a href="#"><img src="{{ asset('assets/images/'.$awa->photos?->image) }}" alt=""></a></div>
                    @endforeach        
                @endif 
            </div>
        </div>
    </section>
    @include('components._teams')
    @include('components._help')
@endsection
