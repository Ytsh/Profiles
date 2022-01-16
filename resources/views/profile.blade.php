@extends('layouts.app')
@section('content')
@if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @elseif(Session::has('errors'))
        <div class="alert alert-danger">
            {{Session::get('errors')}}
        </div>
@endif
<div class="container rounded bg-white mt-5 mb-5 border-top border-bottom">
    <div class="row">
        <div class="col-md-3 border-right border-left">
            @include('profile.avatar')
        </div>
        <div class="col-md-5 border-right ">
            @include('profile.personal')            
        </div>
        <div class="col-md-4 border-right">
            @include('profile.professional')            
        </div>
    </div>
</div>
<div class="container rounded bg-white mt-5 mb-5 border-top border-bottom ">
    <div class="d-flex justify-content-center border-left border-right ">
    @include('profile.academic')        
    </div>    
</div>
@endsection