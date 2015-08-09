<header class="main-header">
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand"><b>EHD</b>OnlineStore</a>
                <button type="button" class="navbar-toggle collapsed" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Window Treatments</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Solar Shades</a></li>
                            <li><a href="#">Roller Shades</a></li>
                            <li class="divider"></li>
                            <li><a href="#">See all products</a></li>
                        </ul>
                    </li>
                    @section('scrollspy')
                        <li id="scrollspy" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Corporate Info</a>
                            <ul class="dropdown-menu">
                                <li><a href="/#">Blog</a></li>
                                <li><a href="/#about">About Us</a></li>
                                <li><a href="/#">Contact Us</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/#showroom">Showroom</a></li>
                                <li><a href="/#workforce">Work Force</a></li>
                                <li><a href="#">Designer Team</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Photo Gallery</a></li>
                                <li><a href="#">Video Gallery</a></li>
                            </ul>
                        </li>
                    @show
                </ul>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @if(Auth::guest())
                            <li>
                                <a href="{{ route('account') }}">Manage account</a>
                            </li>
                        @else
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('img/avatar.png') }}" class="user-image" alt="{{ Auth::user()->fullName }}">
                                    <span class="hidden-xs">{{ Auth::user()->fullName }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="{{ Auth::user()->fullName }}">
                                        <p>
                                            {{ Auth::user()->fullName }}
                                            <small>Member since Oct. 2000</small>
                                        </p>
                                    </li>
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#" class="btn-link">Profile</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#" class="btn-link">Billing</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#" class="btn-link">Help</a>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Settings</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ route('session.destroy') }}" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
