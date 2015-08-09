@extends('app')
@section('content')
<div  class="spied">
    <div class="row pvxl">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h2 class="no-margin">Roller Shades</h2>
                    <p class="text-justify mtl">
                       Roller Blinds | Roller Shades does not have slats unlike Roman shades but has a single piece of material.
                       Its a fabric blind which simply rolls onto a tube when operated. It's very popular and economical window treatment.
                     <br><br>
                      Ideal for sliding glass doors and large windows, roller shades | roller blinds can keep the sun out and keeps the cool air.
                      Keeps morning sunlight from entering your room that keeps you awake.
                      Offers protection for soft furnishings and carpets in the home,
                      reducing damage and fading caused by harsh sunlight.
                   </p>
                     <br>
                    <small>Roller Shades | Roller Blinds are available in over 200+ imported materials.</small>
                </div>
                <div class="col-xs-8">
                    <img class="img-thumbnail img-responsive" src="{{ asset('img/img-about.jpg') }}" alt="About us">
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="spied">
    <div class="row bg-white pvxl">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <img class="img-thumbnail img-responsive" src="{{ asset('img/img-about.jpg') }}" alt="About us">
                </div>
                <div class="col-xs-4">
                    <h2 class="no-margin">Solar Shades</h2>
                    <p class="text-justify mtl">
                       Solar Shades offer the soft look of a sheer, the privacy of a shade and privacy control at every level.
                       This kind of shades is more durable, easy to operate and to maintain by the U-Shape system which
                      filter the dust on it's fabric surface. This is the 
                      latest trends in window treatment. 
                    <br><br>
                      Ideal for sliding glass doors and all types of windows, Solar Shades can keep the sun out and keeps the cool air. Keeps morning 
                      sunlight from entering your room that keeps you awake.<br><br> Offers protection for soft furnishings and carpets in the home, 
                      reducing damage and fading caused by harsh sunlight.
                    </p>

                    <br>
                    <small>Solar Shades are available in over 100+ imported materials.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection