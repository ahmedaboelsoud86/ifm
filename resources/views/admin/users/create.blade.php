@extends('template.layout')
@section('title')
 Add New User
@endsection
@section('content')
@include('partials._errors')
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> User</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('users.store')}}" method="post" class="mt-repeater horizontal-form" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                                        <label class="control-label">Name <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('name') }}"  required maxlength="100"  name="name" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                        <label class="control-label">Email <span style="color: red"> * </span> </label>
                                        <input type="email" autocomplete="off"  value="{{ old('email') }}"  required maxlength="100" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                        <label class="control-label">Password  <span style="color: red"> * </span> </label>
                                        <input type="password" autocomplete="off"  value="{{ old('password') }}" required maxlength="100" name="password" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                        <label class="control-label">Password Confirmation <span style="color: red"> * </span> </label>
                                        <input type="password" autocomplete="off"  value="{{ old('password_confirmation') }}"  required maxlength="100" name="password_confirmation" class="form-control">
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
@endsection






