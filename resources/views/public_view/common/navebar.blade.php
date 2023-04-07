<nav class="pcoded-navbar theme-horizontal menu-light">
        <div class="navbar-wrapper container">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    @foreach ($navbars as $navbarItem)
                            <li class="nav-item">
                            <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather {{ $navbarItem->icon }}"></i></span><span class="pcoded-mtext">{{ $navbarItem->name }}</span></a>
                    </li>
                        @endforeach




                    <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

                </ul>
            </div>
        </div>
    </nav>
