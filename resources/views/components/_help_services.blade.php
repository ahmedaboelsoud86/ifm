<section class="contactus helpform">
        <div class="container">
         @include('partials._session_front')
         @include('partials._errors_front')
            <div class="row">
                <div class="col-sm-5 item">
                    <h5 class="title">@lang('site.how_can_help')</h5>
                    <p>@lang('site.more_information')<a href="mailto:{{ Contactinfo()?->email }}"> {{ Contactinfo()?->email }}</a></p>
                </div>
               
                <div class="col-sm-7 item">
                    <form action="{{ route('help.store')}}" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-4 field">
                           
                                <select name="title" required class="form-control">
                                    <option value="">@lang('site.select_title')</option>
                                    <option value="mr" @selected(old('title'))>Mr</option>
                                    <option value="mrs" @selected(old('title'))>Mrs</option>
                                </select>
                            </div>
                            <div class="col-sm-4 field">
                                <input class="form-control" name="first_name" type="text"  placeholder="@lang('site.fisrt_name')"
                                    onfocus="this.placeholder=''" maxlength="100" required value="{{ old('first_name') }}" onblur="this.placeholder=@lang('site.fisrt_name')">
                            </div>
                            <div class="col-sm-4 field">
                                <input class="form-control" type="text" name="last_name" placeholder="@lang('site.last_name')"
                                    onfocus="this.placeholder=''" maxlength="100" required value="{{ old('last_name') }}" onblur="this.placeholder=@lang('site.last_name')">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="email" name="email" placeholder="@lang('site.email')"
                                    onfocus="this.placeholder=''" maxlength="100"   required value="{{ old('email') }}" onblur="this.placeholder=@lang('site.email')">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="number" name="phone" placeholder="@lang('site.phone_number')"
                                    onfocus="this.placeholder=''" maxlength="100" value="{{ old('phone') }}" onblur="this.placeholder=@lang('site.phone_number')">
                            </div>
                            <div class="col-sm-6 field">
                                <input class="form-control" type="text" name="company_name" placeholder="@lang('site.company_name')"
                                    onfocus="this.placeholder=''" maxlength="100" required value="{{ old('company_name') }}" onblur="this.placeholder='@lang('site.company_name')'">
                            </div>
                            <div class="col-sm-6 field">
                                <select name="company_size" required class="form-control">
                                    <option value="">@lang('site.company_size')</option>
                                    <option value="1-500" @selected(old('company_size'))>1-500 </option>
                                </select>
                            </div>
                            <div class="col-sm-12 field">
                                <select class="form-control" name="type" id="type">
                                    <option value="">@lang('site.please_tell_us')</option>
                                    <option value="enquiry" @selected(old('type'))>@lang('site.general_enquiry') </option>
                                    <option value="takamul" @selected(old('type'))>@lang('site.interested')
                                    </option>
                                </select>
                            </div>
                            <div id="row_dim">
                                <div class="col-sm-12 field">
                                    <textarea class="form-control" name="enquiry" type="text" name=""
                                        placeholder="@lang('site.please_provide')" onfocus="this.placeholder=''"
                                        onblur="this.placeholder=@lang('site.please_provide')"></textarea>
                                </div>
                            </div>
                            <div id="row_dim2">
                                <div class="col-sm-12 field">
                                    <select class="form-control" name="select_sector">
                                        <option value="">@lang('site.select_sector')</option>
                                        <option value="Distribution & Logistics"  @selected(old('select_sector'))>@lang('site.distribution_logistics')</option>
                                        <option value="Dinancial Services"  @selected(old('select_sector'))>@lang('site.dinancial_services')</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 field">
                                    <select class="form-control" name="select_service">
                                        <option value="">@lang('site.select_service')</option>
                                        <option value="Care Custody" @selected(old('select_service'))>@lang('site.care_custody')</option>
                                        <option value="Cleaning Services" @selected(old('select_service'))>@lang('site.cleaning_services')</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 field">
                                    <textarea class="form-control" type="text" name="takamul"
                                        placeholder="@lang('site.please_provide')" onfocus="this.placeholder=''"
                                        onblur="this.placeholder=@lang('site.please_provide')"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 field">
                                <label class="che-box">
                                    <input type="checkbox" name="agree" value="box-2"><span class="label-text">
                                       @lang('site.agree')
                                         </span>
                                </label>
                                <label class="che-box mt-4">
                                    <input type="checkbox" name="read" value="box-2"><span class="label-text">
                                        @lang('site.have_read') <a href="{{ route('privacy_policy') }}"> @lang('site.privacy_policy')</a>
                                        @lang('site.facility_management')</span>
                                </label>
                            </div>
                            <div class="col-sm-12 field">
                                <button class="bottom" type="submit"> <span> @lang('site.submit')</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>