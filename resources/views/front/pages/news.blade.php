@extends('front.pages_template')
@section('title')
    @lang('site.news')
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
        <div class="container">
            <h1 class="title">@lang('site.news')</h1>
            <ul class="maplink">
                <li><a href="{{ route('home')}}">@lang('site.home')</a></li>
                <li>@lang('site.news')</li>
            </ul>
        </div>
    </section>
    <section class="news">
        <div class="container"><span class="tag text-center mb-2">@lang('site.our_news')</span>
            <h2 class="title text-center">@lang('site.latest_news_articles')<br> @lang('site.from_the_blog')</h2>
            <div class="row">
            
                @if($articles->count() >= 1)
                    @foreach($articles as $art) 
                    <div class="col-sm-4 item"> <a class="inner" href="{{ route('news-inner',[$art->id,str_replace(' ','-',$art->title)]) }}">
                            <div class="photo"><img src="{{ asset('assets/images/'.$art->image) }}" alt="{{ $art->title }}"></div>
                            <div class="textcontent"><span class="tag">{{ date_format($art->created_at,"Y-m-d") }}</span>
                                <h3 class="title">{{ Str::words($art->description, 15, ' ') }}</h3>
                            </div>
                        </a></div>
                    @endforeach
                @else
                   <h6 class="text-center">@lang('site.no_articles_found')</h6>
                @endif    
            </div>
            {{ $articles->links() }}
            
        </div>
    </section>
@endsection
