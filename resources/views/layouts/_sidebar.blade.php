<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{url('/')}}" class="logo m-0 float-start">SIGRA<span class="text-primary">.</span></a>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{url('warta/list_warta')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-post"></span><span class="mtext">Warta Jemaat</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{url('ayat_harian/list_ayat')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-collection"></span><span class="mtext">Ayat Harian</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Laporan Keuangan</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{url('keuangan/persembahan/list_keuangan')}}">Persembahan</a>
                        </li>
                        <li><a href="{{url('keuangan/kas/list_kas')}}">Arus Kas Bulanan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-calendar-event"></span><span class="mtext">Formulir Acara/Event</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{url('acara/upcoming/list_acara')}}">Upcoming</a>
                        </li>
                        <li><a href="{{url('acara/ibadah_raya/list_acara')}}">Ibadah Raya</a></li>
                        <li><a href="{{url('acara/partamiangan/list_acara')}}">Jadwal Ibadah Partamiangan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house-fill"></span><span class="mtext">Formulir Gereja</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{url('gereja/sejarah/view_sejarah')}}">Sejarah</a>
                        </li>
                        <li><a href="{{url('gereja/pendeta/list')}}">Struktural (Pendeta)</a></li>
                        <li><a href="{{url('gereja/bph/list')}}">Struktural (BPH dan Rekan)</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-newspaper"></span><span class="mtext">Formulir Berita</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="">Suka Cita</a>
                        </li>
                        <li><a href="{{url('berita/dukacita/list_berita')}}">Duka Cita</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Admin Panel</h4>
                        </div>
                    </div>
                </div>
            </div>
