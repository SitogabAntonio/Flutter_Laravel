<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav" style="background-color : #031e23;">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="/" class="logo m-0 float-start">SIGRA<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="has-children">
                                    <a >Gereja</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('gereja/sejarah')}}">Sejarah</a></li>
                                        <li><a href="{{url('bph')}}">BPH / Struktural</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a>Acara / Event</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('acara/upcoming')}}">Akan Datang</a></li>
                                        <li><a href="{{url('ibadah_raya')}}">Ibadah Raya</a></li>
                                        <li><a href="{{url('acara/partamiangan')}}">Partamiangan</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a>Laporan</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('laporan/persembahan')}}">Persembahan</a></li>
                                        <li><a href="{{url('laporan/kas')}}">Arus Kas Bulanan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                                @if(auth()->check())
                                <p style="display: inline-block; margin-top : 10px;"><a href="{{url('keuangan/landing')}}"
                                        class="btn btn-sm btn-secondary" style = "background-color : #5d7e8f; border : 2px solid white; border-radius : 15px; padding : 10px 10px;  ">Posting</a></p>
                                <p style="display: inline-block; margin-right: 10px; border : 2px solid white; border-radius : 15px; "><a href="{{url('logout')}}"
                                        class="btn btn-sm btn-primary" style = "padding : 10px 10px; border-radius : 15px;">Logout</a></p>
                                @else
                                <p style="display: inline-block; margin-right: 10px;"><a href="{{url('login')}}"
                                        class="btn btn-sm btn-primary" style = "background-color : #5d7e8f; border : 2px solid white; border-radius : 10px; padding : 10px 10px; margin-top:10px;">Login</a></p>
                                @endif
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
