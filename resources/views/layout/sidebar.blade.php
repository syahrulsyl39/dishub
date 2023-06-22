<nav class="sidebar sidebar-offcanvas bg-primary text-white" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-grid menu-icon text-white"></i>
                <span class="menu-title text-white">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-kritik') }}">
                <i class="icon-grid menu-icon text-white"></i>
                <span class="menu-title text-white">Kritik Dan Saran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-survei') }}">
                <i class="icon-columns menu-icon text-white"></i>
                <span class="menu-title text-white">Survei</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-bukutamu') }}">
                <i class="icon-bar-graph menu-icon text-white"></i>
                <span class="menu-title text-white">Buku Tamu</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-video') }}" aria-controls="tables">
                <i class="icon-grid-2 menu-icon text-white"></i>
                <span class="menu-title text-white ">video</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-galery') }}">
                <i class="icon-paper menu-icon text-white"></i>
                <span class="menu-title text-white">Galery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-berita') }}">
                <i class="icon-paper menu-icon text-white"></i>
                <span class="menu-title text-white">Berita</span>
            </a>
        </li>

    </ul>
</nav>
