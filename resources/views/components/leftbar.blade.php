<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="navbar-brand" data-toggle="tab" href="{{ route('dashboard.index') }}">SimooSi</a></li>
                    {{-- <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="assets/images/logo.svg" width="30"
                        alt="Oreo"><span class="m-l-10">SimooSi</span></a> --}}
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="{{ asset('assets/images/profile_av.jpg') }}"
                                        alt="User"></a></div>
                            <div class="detail">
                                <h4>Nama</h4>
                                <small>Role</small>
                            </div>
                        </div>
                    </li>
                    <li class="{{ request()->is('/') ? 'active' : ''}}">
                        <a href="{{ route('dashboard.index') }}">
                            <i class="zmdi zmdi-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('ternak') ? 'active open' : ''}}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pets</i>
                            <span>Ternak</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ request()->is('ternak') ? 'active' : ''}}">
                                <a href="{{ route('ternak.index') }}">Daftar Ternak</a>
                            </li>
                            <li class="{{ request()->is('jenis') ? 'active' : ''}}">
                                <a href="#">Jenis</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('peternak') ? 'active open' : ''}}">
                        <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account"></i><span>User</span></a>
                        <ul class="ml-menu">
                            <li class="{{ request()->is('peternak') ? 'active' : ''}}">
                                <a href="{{ route('peternak.index') }}">Peternak</a>
                            </li>
                            <li class="{{ request()->is('dokter') ? 'active' : ''}}">
                                <a href="#">Dokter</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.index') }}"><i class="material-icons">thumb_up</i>
                            <span>Rekomendasi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
    </div>
</aside>
