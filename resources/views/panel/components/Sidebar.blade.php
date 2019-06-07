@section('components.Sidebar')
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="user-wrapper">
                        <div class="profile-image">
                            <img src="{{ asset('images/faces/'.Auth::user()->profile_pic) }}" alt="profile image" />
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->last_name) }}</p>
                            <div>
                                <small class="designation text-muted">{{ Auth::user()->userType->user_type }}</small>
                                <span class="status-indicator online"></span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block">Nuevo Post <i class="mdi mdi-plus"></i></button>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('panel')}}">
                    <i class="menu-icon mdi mdi-television"></i>
                    <span class="menu-title">Panel</span>
                </a>
            </li>

            @foreach ($_PRIVILEGES_MENU_ as $itemPrivilegeMenu)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#module{{$itemPrivilegeMenu['category']['pk_privilege_category']}}" aria-expanded="false" aria-controls="module{{$itemPrivilegeMenu['category']['pk_privilege_category']}}">
                        <i class="menu-icon mdi {{ $itemPrivilegeMenu['category']['menu_icon'] }}"></i>
                        <span class="menu-title">{{ $itemPrivilegeMenu['category']['privilege_category'] }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    @if( sizeof($itemPrivilegeMenu['privileges']) > 0 )
                        <div class="collapse" id="module{{$itemPrivilegeMenu['category']['pk_privilege_category']}}">
                            <ul class="nav flex-column sub-menu">
                                @foreach ($itemPrivilegeMenu['privileges'] as $itemPrivilege)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('panel/' . $itemPrivilege['menu_url']) }}">{{ $itemPrivilege['tag'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- partial -->
@endsection