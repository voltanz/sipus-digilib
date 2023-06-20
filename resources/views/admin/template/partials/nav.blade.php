<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-capitalize" href="/" role="button">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <b>{{ auth()->user()->name }}</b>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="{{ asset('assets/logo/smansaga.png') }}" alt="smansaga.png"
                            class="brand-image img-size-50 mr-3" style="opacity: .8">
                        <div class="media-body">
                            <p> {{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="" {{ route('logout') }}" class="btn btn-info m-2 float-right"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        
    </ul>
</nav>
