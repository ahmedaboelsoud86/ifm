@if($articles)
    <section class="news">
      <div class="container"><span class="tag text-center mb-2">@lang('site.our_news')</span>
        <h2 class="title text-center">@lang('site.latest_articles')<br>@lang('site.from_blog')</h2>
        <div class="row">
          @foreach($articles as $art)
          <div class="col-sm-4 item"> <a class="inner" href="{{ route('news-inner',[$art->id,str_replace(' ','-',$art->title)]) }}">
              <div class="photo"><img src="{{ asset('assets/images/'.$art->image) }}" alt="{{ $art->title }}"></div>
              <div class="textcontent"><span class="tag">{{ date_format($art->created_at,"Y-m-d") }}</span>
                <h3 class="title">{{ Str::words($art->description, 15, ' ...') }}</h3>
              </div></a></div>
          @endforeach    
         
        </div>
        <div class="text-center mt-5"><a class="bottom" href="{{ route('news')}}"><span>@lang('site.read_more')</span></a></div>
      </div>
    </section><!--End minnews-->
    
    @endif