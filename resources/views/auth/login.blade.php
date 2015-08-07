<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Login to your account</h3>
    </div>
    <div class="panel-body">
        @unless (Session::get('form') == 'registration')
            @include('partials.errors')
        @endunless
        {!! Form::open(['route' => 'session.store']) !!}

        <div class="form-group">
            {!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Your Password', ['class' => 'control-label']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Your Password']) !!}
            </div>
        </div>
        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember') !!} Keep me logged in
            </label>
        </div>

        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-block btn-primary']) !!}
        </div>

        <a href="#" class="btn btn-link btn-block">Request password reset</a>

        {!! Form::close() !!}
    </div>
</div>
