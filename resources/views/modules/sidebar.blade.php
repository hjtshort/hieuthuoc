<div class="sidebar" data-color="orange" data-image="{{ asset('/assets/img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/img/default-avatar.png') }}" />
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>{{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @if(Request::segment(1)=='list') active @endif " >
                <a class="nav-link" href="{{ route('list') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Thống kê</p>
                </a>
            </li>
            <li class="nav-item  @if(Request::segment(1)=='insert') active @endif">
                <a class="nav-link" href="{{ route('ginsert') }}" >
                    <i class="nc-icon nc-app"></i>
                    <p>
                        Thêm thuốc
                    </p>
                </a>
            </li>
        </ul>
    </div>
</div>