<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Create a new account</h3>
    </div>
    <div class="panel-body">
        @if (Session::get('form') == 'registration')
            @include('partials.errors')
        @endif
        {!! Form::open(['route' => 'register.store']) !!}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('firstname', 'First Name', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('lastname', 'Last Name', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('registration_email', 'Email Address', ['class' => 'control-label']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {!! Form::email('registration_email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('registration_password', 'Your Password', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {!! Form::password('registration_password', ['class' => 'form-control', 'placeholder' => 'Your Password']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('registration_password_confirmation', 'Password Confirmation', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {!! Form::password('registration_password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-block btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
