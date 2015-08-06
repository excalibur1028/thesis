@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>@yield('error-title', 'Whoops!')</strong> @yield('error-description', 'There were some problems with your input.')<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
