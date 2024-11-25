@extends('template.layout')
@section('title')
Message
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <h1>Message : </h1>
        <hr>
        <p>{{$message->message}}</p>
    </div>
</div>
@endsection


