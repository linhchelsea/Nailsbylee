<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if(!empty(Auth::user()->avatar))
                    <img src="{{ asset("/storage/avatars/".Auth::user()->avatar)}}" class="user-image" alt="#">
                @else
                    <img src="{{ asset("/storage/avatars/avatar.png")}}" class="user-image" alt="#">
                @endif
                <span class="hidden-xs">Nguyen Manh Linh</span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="{{ asset("/storage/avatars/avatar.png") }}" class="img-circle" alt="User Image">
                    <p>
                        Nguyen Manh Linh
                    </p>
                </li>
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{ route('profile') }}" class="btn btn-warning">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="" class="btn btn-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>