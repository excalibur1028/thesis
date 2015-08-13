@extends('app')
@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1">
                    <img class="img-responsive" src="{{ $material->image_path }}" alt="{{ $material->name }}">
                </div>
                <div class="col-xs-5">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                Select Mount Type
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <img class="img-thumbnail img-responsive" src="{{ asset('img/customization/mounting-inside.png') }}" alt="Inside">
                                                    <input type="radio" name="mount" value="mounting-inside">Inside
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <img class="img-thumbnail img-responsive" src="{{ asset('img/customization/mounting-outside.png') }}" alt="Outside">
                                                    <input type="radio" name="mount" value="mounting-outside">Outside
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p><strong>Inside Mount</strong></p>
                                                    <ul>
                                                        <li>inside window frame</li>
                                                        <li>a clean, built-in look</li>
                                                        <li>minimum depth requirement</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p><strong>Outside Mount</strong></p>
                                                    <ul>
                                                        <li>outside window frame</li>
                                                        <li>a taller, dramatic appearance</li>
                                                        <li>no minimum depth requirement</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                                Enter Product Measurements
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="width">Width</label>
                                                        <input type="text" class="form-control" name="width" placeholder='Inches " '>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="height">Height</label>
                                                        <input type="text" class="form-control" name="height" placeholder='Inches " '>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p>For inside mount, material will be approximately 1 3/8" narrower than your ordering width to allow for brackets. For outside mount, material will be 1 1/4" narrower than the measurement you provide to allow for brackets.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                                Select Control Position
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6 text-center">
                                                    <input type="radio" name="control" value="control-left">Left
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <input type="radio" name="control" value="control-right">Right
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p>Consider the placement of your treatment and select a position that's easily accessible for you. "Left" and "Right" refer 
                                                       to your left and right.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#CollapseSix" aria-expanded="false" aria-controls="CollapseSix" class="collapsed">
                                                Select Roll Type
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="CollapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6 text-center">
                                                    <img class="img-thumbnail img-responsive" src="{{ asset('img/customization/roll-type-regular.png') }}" alt="Regular">
                                                    <input type="radio" name="roll-type" value="regular">Regular
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <img class="img-thumbnail img-responsive" src="{{ asset('img/customization/roll-type-reverse.png') }}" alt="Reverse">
                                                    <input type="radio" name="roll-type" value="reverse">Reverse
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p><strong>Regular</strong></p>
                                                    <ul>
                                                        <li>fabric falls off back of roll</li>
                                                        <li>shade remains closer to casing</li>
                                                        <li>compatible with metal valance</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p><strong>Reverse</strong></p>
                                                    <ul>
                                                        <li>fabric falls off front of roll</li>
                                                        <li>more clearance and a finished look</li>
                                                        <li>incompatible with metal valance</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#CollapseNine" aria-expanded="false" aria-controls="CollapseNine" class="collapsed">
                                                Room Label
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="CollapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <label for="room">Name:</label>
                                                    <input type="text" class="form-control" name="room" placeholder="Enter Room Label">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p>Great for keeping track of multiple items! Create a label to help easily identify this treatment when your order arrives. Consider using the name of the room where it will ultimately end up e.g. "Kitchen" or "Guest Bedroom".</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection