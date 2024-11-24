@extends('template.layout')
@section('title')
 Add New Settings
@endsection
@section('content')
@include('partials._errors')
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Settings</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('settings.store')}}" method="post" class="mt-repeater horizontal-form"> 
                        {{ csrf_field() }}
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('adress_en') ? ' has-error' : '' }}" >
                                        <label class="control-label">Adress EN <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('adress_en') }}"  required maxlength="100"  name="adress_en" class="form-control">
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('adress_ar') ? ' has-error' : '' }}" >
                                        <label class="control-label">Adress Ar  <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('adress_ar') }}"  required maxlength="100"  name="adress_ar" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('phone') ? ' has-error' : '' }}" >
                                        <label class="control-label">Phone<span style="color: red"> * </span> </label>
                                        <input type="number" autocomplete="off"  value="{{ old('phone') }}"  required maxlength="100"  name="phone" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                        <label class="control-label">Email<span style="color: red"> * </span> </label>
                                        <input type="email" autocomplete="off"  value="{{ old('email') }}"  required maxlength="100" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}" >
                                        <label class="control-label">Whatsapp <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('whatsapp') }}" required maxlength="100" name="whatsapp" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}" >
                                        <label class="control-label">Linkedin <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('linkedin') }}"  required maxlength="100" name="linkedin" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('youtube') ? ' has-error' : '' }}" >
                                        <label class="control-label">Youtube <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('youtube') }}" required maxlength="100" name="youtube" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('instagram') ? ' has-error' : '' }}" >
                                        <label class="control-label">Instagram<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('instagram') }}"  required maxlength="100" name="instagram" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('facebok') ? ' has-error' : '' }}" >
                                        <label class="control-label">Facebok <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('facebok') }}" required maxlength="100" name="facebok" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('twitter') ? ' has-error' : '' }}" >
                                        <label class="control-label">Twitter<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('twitter') }}"  required maxlength="100" name="twitter" class="form-control">
                                    </div>
                                </div>
                            </div>
                           
                       <div class="form-actions right">
                              <button type="submit" class="btn blue" id="add_btn">
                                  <i class="fa fa-check"></i> Add </button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@push('js')
@endpush
@endsection






