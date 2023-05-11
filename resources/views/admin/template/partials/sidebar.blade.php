<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MAIN NAVIGATION</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.book.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Buku
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.author.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Penulis
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.borrow.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>Peminjaman</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-excel"></i>
                    <p>Report</p>
                </a>
            </li>
            <li class="nav-header">OTHER</li>
            <li class="nav-item">
                <a href="{{ route('admin.history') }}" class="nav-link">
                    <i class="nav-icon fas fa-server"></i>
                    <p>History</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>