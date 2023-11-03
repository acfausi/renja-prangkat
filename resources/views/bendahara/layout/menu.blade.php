<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="{{ url('bendahara/dashboard') }}">
                        <i class="bi bi-grid"></i>
                        <span>Home</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Target</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('bendahara/target') }}">
                                <i class="bi bi-circle"></i><span>SEKRETARIAT</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('bendahara/target') }}">
                                <i class="bi bi-circle"></i><span>PENYULUHAN</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Triwulan</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('bendahara/triwulan') }}">
                                <i class="bi bi-circle"></i><span>Realisasi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i>
                        <span>Rekap</span>
                    </a>
                </li>
                <!-- End Profile Page Nav -->

            </ul>
        </aside>
    </div>
</div>
