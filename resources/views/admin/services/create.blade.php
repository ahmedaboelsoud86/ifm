@extends('template.layout')
@section('title')
 Add New Service
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
                    <i class="fa fa-gift"></i> Service</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('services.store')}}" method="post" class="mt-repeater horizontal-form" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('category_service_id') ? ' has-error' : '' }}" >
                                        <label class="control-label">Categories <span style="color: red"></span> </label>
                                        <select class="form-control" name="category_service_id">
                                            @if($categories)
                                                @foreach ($categories as $cat)
                                                    <option value="{{$cat->id}}"> {{ $cat->translations[0]->title }}</option>    
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Image <span style="color: red"></span> </label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title En<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off" required maxlength="100" value="{{ old('en.title') }}"    name="en[title]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off" required maxlength="100" value="{{ old('ar.title') }}"  name="ar[title]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.description') ? ' has-error' : '' }}" >
                                        <label class="control-label"> Description EN <span style="color: red"> * </span> </label>
                                        <textarea class="form-control"  name="en[description]" rows="10">{{ old('en.description') }}</textarea>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.description') ? ' has-error' : '' }}" >
                                        <label class="control-label">Description AR <span style="color: red"> * </span> </label>
                                        <textarea class="form-control"  name="ar[description]" rows="10">{{ old('ar.description') }}</textarea>
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






