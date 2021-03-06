<nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="nav navbar-nav mr-auto">
                    <form class="navbar-form navbar-left navbar-search-form" role="search" method="get" 
                    action="{{ route('list') }}">
                        <div class="input-group">
                            <i class="nc-icon nc-zoom-split"></i>
                            <input type="text" value="" class="form-control" name='search' placeholder="Search...">
                        </div>
                    </form>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="nc-icon nc-bell-55"></i>
                            <span class="notification">{{ count($notify) }}</span>
                            <span class="d-lg-none">Notification</span>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-right" style="    overflow-y: scroll;max-height: 300px;">
                            @foreach($notify as $val)
                            <a class="dropdown-item" href="{{ route('list').'?search='.$val->tenthuoc }}">{{ $val->tenthuoc }} hết hạn!!!</a>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-bullet-list-67"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="">
                                <i class="nc-icon nc-email-85"></i> Messages
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="nc-icon nc-umbrella-13"></i> Help Center
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="nc-icon nc-settings-90"></i> Settings
                            </a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="">
                                <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item text-danger">
                                <i class="nc-icon nc-button-power"></i> Log out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>