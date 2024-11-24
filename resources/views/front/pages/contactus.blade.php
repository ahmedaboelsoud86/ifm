@extends('front.pages_template')
@section('title')
    @lang('site.contact_us')
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/contactus.jpg') }}" alt="">
        <div class="container ">
            <h1 class="title">@lang('site.contact_us')</h1>
            <ul class="maplink">
                <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                <li>@lang('site.contact_us')</li>
            </ul>
        </div>
    </section>
    <section class="contactus">
        <div class="container">
          
            <div class="row">
                <div class=" col-sm-3 item ">
                    <div class="contact-block">
                        <svg version="1.1" width="90" height="60" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 368.16 368.16"
                            style="enable-background:new 0 0 368.16 368.16;" xml:space="preserve">
                            <path
                                d="M184.08,0c-74.992,0-136,61.008-136,136c0,24.688,11.072,51.24,11.536,52.36c3.576,8.488,10.632,21.672,15.72,29.4 l93.248,141.288c3.816,5.792,9.464,9.112,15.496,9.112s11.68-3.32,15.496-9.104l93.256-141.296 c5.096-7.728,12.144-20.912,15.72-29.4c0.464-1.112,11.528-27.664,11.528-52.36C320.08,61.008,259.072,0,184.08,0z M293.8,182.152c-3.192,7.608-9.76,19.872-14.328,26.8l-93.256,141.296c-1.84,2.792-2.424,2.792-4.264,0L88.696,208.952 c-4.568-6.928-11.136-19.2-14.328-26.808C74.232,181.816,64.08,157.376,64.08,136c0-66.168,53.832-120,120-120 c66.168,0,120,53.832,120,120C304.08,157.408,293.904,181.912,293.8,182.152z">
                            </path>
                            <path
                                d="M184.08,64.008c-39.704,0-72,32.304-72,72c0,39.696,32.296,72,72,72c39.704,0,72-32.304,72-72 C256.08,96.312,223.784,64.008,184.08,64.008z M184.08,192.008c-30.872,0-56-25.12-56-56s25.128-56,56-56s56,25.12,56,56 S214.952,192.008,184.08,192.008z">
                            </path>
                        </svg>
                        <div class="block-info">
                            <h5 class="title">@lang('site.adress')</h5>
                            @if(isset(contactinfo()->adress))
                            {{ json_decode(contactinfo()->adress ,true)['adress_'.app()->getLocale()] }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3 item ">
                    <div class="contact-block">
                        <svg width="47" height="49" viewBox="0 0 47 49" xmlns="http://www.w3.org/2000/svg"
                            style="cursor: none;">
                            <path
                                d="M40.2634 18.6324V16.7485C40.2634 12.2397 38.6678 8.05 35.7752 4.94118C32.8105 1.75 28.734 0 24.2869 0H22.7325C18.2855 0 14.209 1.75 11.2443 4.94118C8.35164 8.05 6.75605 12.2397 6.75605 16.7485V18.6324C3.24576 18.8691 0.456055 21.7926 0.456055 25.3647V28.3088C0.456055 32.025 3.48253 35.0515 7.1987 35.0515H10.9972C11.6766 35.0515 12.2325 34.4956 12.2325 33.8162V19.8471C12.2325 19.1676 11.6766 18.6118 10.9972 18.6118H9.22664V16.7485C9.22664 8.60588 15.0325 2.47059 22.7222 2.47059H24.2766C31.9766 2.47059 37.7722 8.60588 37.7722 16.7485V18.6118H36.0016C35.3222 18.6118 34.7663 19.1676 34.7663 19.8471V33.8059C34.7663 34.4853 35.3222 35.0412 36.0016 35.0412H37.731C37.2266 41.4853 32.7899 42.9779 30.7311 43.3176C30.1649 41.5779 28.5281 40.3221 26.6031 40.3221H23.5149C21.1266 40.3221 19.1811 42.2676 19.1811 44.6559C19.1811 47.0441 21.1266 49 23.5149 49H26.6134C28.6105 49 30.2884 47.6412 30.7928 45.8088C31.8016 45.6647 33.3972 45.3044 34.9825 44.3779C37.2163 43.0706 39.8619 40.4044 40.2119 35.0309C43.7428 34.8147 46.5428 31.8809 46.5428 28.2985V25.3544C46.5531 21.7926 43.7737 18.8588 40.2634 18.6324ZM9.78252 32.5706H7.21929C4.86194 32.5706 2.94723 30.6559 2.94723 28.2985V25.3544C2.94723 22.9971 4.86194 21.0824 7.21929 21.0824H9.78252V32.5706ZM26.6134 46.5294H23.5149C22.4855 46.5294 21.6516 45.6956 21.6516 44.6662C21.6516 43.6368 22.4855 42.8029 23.5149 42.8029H26.6134C27.6428 42.8029 28.4766 43.6368 28.4766 44.6662C28.4766 45.6956 27.6428 46.5294 26.6134 46.5294ZM44.0825 28.2985C44.0825 30.6559 42.1678 32.5706 39.8105 32.5706H37.2472V21.0824H39.8105C42.1678 21.0824 44.0825 22.9971 44.0825 25.3544V28.2985Z"
                                style="cursor: none;"></path>
                        </svg>
                        <div class="block-info">
                            <h5 class="title"> @lang('site.phone')</h5><a class="info-text" href="#">{{ contactinfo()?->phone }}</a>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3 item ">
                    <div class="contact-block">
                        <svg width="50" height="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="cursor: none;" xml:space="preserve">
                            <path
                                d="M485.743,85.333H26.257C11.815,85.333,0,97.148,0,111.589V400.41c0,14.44,11.815,26.257,26.257,26.257h459.487 c14.44,0,26.257-11.815,26.257-26.257V111.589C512,97.148,500.185,85.333,485.743,85.333z M475.89,105.024L271.104,258.626 c-3.682,2.802-9.334,4.555-15.105,4.529c-5.77,0.026-11.421-1.727-15.104-4.529L36.109,105.024H475.89z M366.5,268.761 l111.59,137.847c0.112,0.138,0.249,0.243,0.368,0.368H33.542c0.118-0.131,0.256-0.23,0.368-0.368L145.5,268.761 c3.419-4.227,2.771-10.424-1.464-13.851c-4.227-3.419-10.424-2.771-13.844,1.457l-110.5,136.501V117.332l209.394,157.046 c7.871,5.862,17.447,8.442,26.912,8.468c9.452-0.02,19.036-2.6,26.912-8.468l209.394-157.046v275.534L381.807,256.367 c-3.42-4.227-9.623-4.877-13.844-1.457C363.729,258.329,363.079,264.534,366.5,268.761z"
                                style="cursor: none;"></path>
                        </svg>
                        <div class="block-info">
                            <h5 class="title">@lang('site.email')</h5><a class="info-text" href="#">{{ contactinfo()?->email }}</a>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3 item ">
                    <div class="contact-block">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z">
                            </path>
                            <path
                                d="M12 5C11.4477 5 11 5.44771 11 6V12.4667C11 12.4667 11 12.7274 11.1267 12.9235C11.2115 13.0898 11.3437 13.2343 11.5174 13.3346L16.1372 16.0019C16.6155 16.278 17.2271 16.1141 17.5032 15.6358C17.7793 15.1575 17.6155 14.5459 17.1372 14.2698L13 11.8812V6C13 5.44772 12.5523 5 12 5Z">
                            </path>
                        </svg>
                        <div class="block-info">
                            <h5 class="title">@lang('site.work_hours')</h5>
                            <p>8 am - 4 pm <br>Saturday - Thursday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-sm-4 item mt">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3624.2297827660323!2d46.6911844605203!3d24.71899037811335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s8497%20Al%20Urubah%20Rd%2C%20As%20Sulimaniyah%2C%203351%2C%20Riyadh%2012245!5e0!3m2!1sar!2seg!4v1729505667953!5m2!1sar!2seg"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm-8 item mt"><span class="tag">@lang('site.contact_form')</span>
                    <h5 class="title">@lang('site.contact_us')</h5>
                    @include('partials._session_front')
                    @include('partials._errors_front')
                    <form action="{{ route('contact_us.store') }}" method="post">
                    @csrf
                       
                        <div class="row">
                            
                            <div class="col-sm-6 field">
                                <input class="form-control" type="text" name="yourname" placeholder="@lang('site.yourname')"
                                    onfocus="this.placeholder=''" required maxlength="100"  value="{{ old('yourname') }}" onblur="this.placeholder='@lang('site.yourname')'">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="email" name="email" placeholder="@lang('site.email')"
                                    onfocus="this.placeholder=''" required maxlength="100" value="{{ old('email') }}" onblur="this.placeholder='@lang('site.email')'">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="text" name="phone" placeholder="@lang('site.phone')"
                                    onfocus="this.placeholder=''"  required maxlength="50" value="{{ old('phone') }}" onblur="this.placeholder='@lang('site.phone')'">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="text" name="subject" placeholder="@lang('site.subject')"
                                    onfocus="this.placeholder=''" required maxlength="100"  value="{{ old('subject') }}" onblur="this.placeholder='@lang('site.subject')'">
                            </div>
                            <div class="col-sm-12 field">
                                <textarea class="form-control"  required type="text" name="message" placeholder="@lang('site.message')" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='  @lang('site.message')'">{{ old('message') }}</textarea>
                            </div>
                            <div class="col-sm-12 field">
                                <button class="bottom" type="submit"> <span>@lang('site.send')</span> </button>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
