@extends('app')
@section('content')
    <div class="row ptxl pbl">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2 class="no-margin">{{ $treatment->name }}</h2>
                    <p class="text-justify mtm">
                        {{ $treatment->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @foreach($treatment->collections as $collection)
        <div class="row">
            <div class="container">
                <div class="panel panel-default no-border">
                    <div class="panel-heading no-border">
                        <h4 class="no-margin">{{ $collection->name }}</h4>
                    </div>
                    <div class="panel-body">
                        @foreach($collection->materials as $key => $material)
                            <div class="row {{ $key % 2 == 0 ? '' : 'pvm' }}">
                                <div class="col-xs-2">
                                    <img class="img-responsive" src="{{ $material->image_path }}" alt="{{ $material->name }}">
                                </div>
                                <div class="col-xs-7">
                                    <h4 class="no-margin">{{ $material->name }}</h4>
                                    <p class="mts">
                                        {{ $material->description }}
                                    </p>
                                </div>
                                <div class="col-xs-3">
                                    <a href="{{ route('material.show', [$collection->slug, $material->slug]) }}" class="btn btn-warning pull-right">Customize</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection