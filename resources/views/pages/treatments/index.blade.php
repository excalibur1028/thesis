@extends('app')
@section('content')

    @foreach($treatments as $key => $treatment)
        <div class="row pvxl {{ $key % 2 == 0 ? '' : 'bg-white' }}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <a href="{{ route('treatment.show', $treatment->slug )  }}">
                            <img class="img-thumbnail img-responsive" src="{{ $treatment->collections ? $treatment->collections->first()->image_path : '' }}" alt="About us">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <h2 class="no-margin">{{ $treatment->name }}</h2>
                        <p class="text-justify mtm">
                            {{ $treatment->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
