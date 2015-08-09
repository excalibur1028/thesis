@extends('app')

@include('partials.scrollspy')

@section('content')
    @include('pages.about')
    @include('pages.contact')
@endsection

@section('scripts')
    <script>
        $("#scrollspy ul li a[href^='#']").on('click', function(e){

            e.preventDefault();

            var hash = this.hash;

            $("html, body").animate({
                scrollTop: $(hash).offset().top
            }, 300, function(){
                window.location.hash = hash;
            });
        });
    </script>
@endsection
