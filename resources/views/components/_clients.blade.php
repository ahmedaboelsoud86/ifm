@if($clients)
<section class="clients">
    <div class="container"><span class="tag text-center mb-2">@lang('site.clients')</span>
        <h2 class="title text-center">  @lang('site.our_latest_clients')</h2>
        <div class="row">
           @foreach ($clients as $cli)
              <div class="col-sm-3 item"><a href="{{ route('clients')}}"><img src="{{ asset('assets/images/'.$cli->photos->image) }}" alt=""></a></div>
           @endforeach
        </div>
    </div>
</section><!-- End clients--><!--End minclients-->
@endif