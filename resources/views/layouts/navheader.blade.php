<nav class="navbar navbar-default navbar-static-top nav-main-head" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand nav-main-name" href="{!! url('firm'); !!}">
            {{ config('app.name') }}
        </a>
    </div>
    @if (Route::has('login'))
        @if (Auth::check())
            <ul class="nav navbar-top-links navbar-right" style="margin-top: 5px; margin-right: 30px;">
                <li class="dropdown">
                    <a  href="{{ url('/firm') }}" style=" font-weight: bold; font-size: 14px;">
                        You are still on session, just click here to proceed.
                    </a>      
                </li>
            </ul>
        @else
            <ul class="nav navbar-top-links navbar-right" style="margin-top: 5px; margin-right: 30px;">
                <li class="dropdown">
                    <a href="{{ url('/login') }}" style=" font-weight: bold; font-size: 12px;">
                        <i class="fa fa-sign-in fa-fw"></i> LOG IN
                    </a>      
                </li>
            </ul> 
            <ul class="nav navbar-top-links navbar-right" style="margin-top: 5px; margin-right: 0px;">
                <li class="dropdown">
                    <a href="{{ url('/') }}" style=" font-weight: bold; font-size: 12px;">
                        <i class="fa fa-home fa-fw"></i> HOME
                    </a>      
                </li>
            </ul> 
        @endif
    @endif
</nav>