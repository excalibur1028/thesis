@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                @include('auth.login')
            </div>
            <div class="col-md-7 col-sm-6">
                @include('auth.register')
            </div>
        </div>
    </div>
@endsection