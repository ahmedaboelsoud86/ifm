@extends('template.layout')
@section('title')
Helps
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        @foreach (json_decode($help->message) as $key=>$val )
            <p> <h2>{{ $key}} </h2>  {{ $val }}<p>
        @endforeach
    </div>
</div>
@endsection


