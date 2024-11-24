@extends('template.layout')
@section('title')
 Add New About
@endsection
@section('content')
@include('partials._errors')
<style>
textarea {
  resize: none;
}
</style>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> About</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('abouts.store')}}" method="post" class="mt-repeater horizontal-form" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group{{ $errors->has('frist_image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Frist Image <span style="color: red"> * (width mist be 600 px and height 400 px )</span> </label>
                                        <input type="file" autocomplete="off"     name="frist_image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group{{ $errors->has('second_image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Second Image <span style="color: red"> * (width mist be 1200 px and height 800 px )</span> </label>
                                        <input type="file" autocomplete="off"     name="second_image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group{{ $errors->has('number_of_years') ? ' has-error' : '' }}" >
                                        <label class="control-label">Number Of Years<span style="color: red"> * </span> </label>
                                        <input type="number" autocomplete="off"  value="{{ old('number_of_years') }}"  required maxlength="100"  name="number_of_years" class="form-control">
                                    </div>
                                </div>
                                 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title En<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('en.title') }}"    name="en[title]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('ar.title') }}"  required maxlength="100" name="ar[title]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.description') ? ' has-error' : '' }}" >
                                        <label class="control-label">Description EN <span style="color: red"> * </span> </label>
                                        <textarea class="form-control" rows="10" required name="en[description]">{{ old('en.description') }}</textarea>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.description') ? ' has-error' : '' }}" >
                                        <label class="control-label">Description AR <span style="color: red"> * </span> </label>
                                        <textarea class="form-control" rows="10" required name="ar[description]">{{ old('en.description') }}</textarea>
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






