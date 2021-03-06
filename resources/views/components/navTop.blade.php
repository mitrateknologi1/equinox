<div class="nav-top">
    <div class="container d-flex flex-row" style="max-width: 1700px !important">
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <!-- Logo Header -->
        <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="{{asset('assets/dashboard/img')}}/logo-simou-footer.png" alt="navbar brand" class="navbar-brand"
                width="200px">
        </a>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg p-0">

            <div class="container p-0 mr-0">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-language"></i>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="/lang/id">
                                            <div
                                                class="notif-icon {{ session()->get('locale') == 'id' || session()->get('locale') ? 'notif-primary' : 'notif-ligth' }} ">
                                                <span class="flag-icon flag-icon-id"></span>
                                            </div>
                                            <div
                                                class="notif-content d-flex align-items-center {{ session()->get('locale') == 'id' ? 'text-primary fw-bold' : 'text-grey' }}">
                                                Indonesia
                                            </div>
                                        </a>
                                        <a href="/lang/en">
                                            <div
                                                class="notif-icon {{ session()->get('locale') == 'en' ? 'notif-primary' : 'notif-ligth' }}">
                                                <span class="flag-icon flag-icon-us"></span>
                                            </div>
                                            <div
                                                class="notif-content d-flex align-items-center {{ session()->get('locale') == 'en' ? 'text-primary fw-bold' : 'text-grey' }}">
                                                {{__('components/navTop.inggris')}}
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="{{asset('assets/dashboard')}}/img/user.png" alt="..."
                                    class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box d-flex align-items-center">
                                        <div class="avatar-lg"><img src="{{asset('assets/dashboard')}}/img/user.png"
                                                alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4 class="text-truncate" style="width: 150px">{{Auth::user()->nama}}</h4>
                                            <p class="text-muted">{{Auth::user()->role}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                        href="{{url('/profil')}}">{{__('components/navTop.aturProfil')}}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                        href="{{url('/logout')}}">{{__('components/navTop.keluar')}}</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
</div>
