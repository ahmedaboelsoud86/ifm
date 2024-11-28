@extends('layouts.app')

@section('content')

<div class="container">
<h1 class=" text-center bold-text">
        SIGN IN
</h1>
<style>
    body{
        background-color: #d8e0e1;
        color: #0f9fdc;
    }
    .bold-text{
        font-weight: bold;
    }
    .x{
        width: 100%;
        background-color: #0f9fdc;
        border: 5px solid  #0f9fdc;
        border-radius: 5px 5px !important;
    }
    .x:hover{
        width: 100%;
        background-color: #67c7ef;
        border: 5px solid  #67c7ef;
        border-radius: 5px 5px !important;
    }
    .redis{
        border-radius: 10px 10px !important;
    }
</style>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card redis">
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group">
                            <label for="psw"><b>Email <span style="color:red"> * </span> </b></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group">
                            <label for="psw"><b>Password <span style="color:red"> * </span></b></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary  btn-block x" >
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
