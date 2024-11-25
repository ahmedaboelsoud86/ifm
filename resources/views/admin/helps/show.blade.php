@extends('template.layout')
@section('title')
Helps
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <ul>
        @foreach (json_decode($help->message) as $key=>$val)
            @if($val != 'takamul' && $val != 'enquiry')
                <li><p>{{ $val }}<p></li>
            @endif 
        @endforeach
        </ul>
    </div>
</div>
@endsection


