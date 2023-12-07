<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1000;
        overflow-y: auto;
    }

    .main-content {
        margin-left: 230px;
    }
</style>

<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Admin Dashboard</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanv as-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard') ? 'active' : '' }}" aria-current="page" href="/admin-dashboard">
                        <i class="bi bi-person-circle"></i> Profil Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard') ? 'active' : '' }}" aria-current="page" href="/admin-dashboard">
                        <i class="bi bi-person-circle"></i> Profil Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard/user*') ? 'active' : '' }}" href="/admin-dashboard/user">
                        <i class="bi bi-people"></i> List User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard/toko*') ? 'active' : '' }}" href="/admin-dashboard/toko">
                        <i class="bi bi-shop"></i> List Toko
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard/produk*') ? 'active' : '' }}" href="/admin-dashboard/produk">
                        <i class="bi bi-box-seam"></i> List Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard/kategori*') ? 'active' : '' }}" href="/admin-dashboard/kategori">
                        <i class="bi bi-grid"></i> List Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin-dashboard/pesanan*') ? 'active' : '' }}" href="/admin-dashboard/pesanan">
                        <i class="bi bi-cart"></i> List Pesanan
                    </a>
                </li>
            </ul>
            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/">
                        <i class="bi bi-house"></i> Back To Home
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2"><i class="bi bi-box-arrow-right"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>

        </div>
    </div>
</div>