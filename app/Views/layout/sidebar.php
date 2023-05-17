<aside class="main-sidebar main-sidebar-custom sidebar-dark-light elevation-4">
    <!-- Brand Logo -->
    <a href="\" class="brand-link d-flex align-items-center">
        <i class="fa-solid fa-bookmark brand-image mt-1 pl-2 h4 d-flex"></i>
        <span class="brand-text">Lib<strong>Project.</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <i class="fa-solid fa-circle-user mt-1 pl-1 h4 text-white d-flex"></i>
            </div>
            <div class="info">
                <a href="#" class="d-flex"><?= session('name') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="\" class="nav-link <?= !url_is('')?'':'active' ?>">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?= !(url_is('/category') or url_is('/book') or url_is('/publisher'))?'':'active' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Bookshelf
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/category" class="nav-link <?= !url_is('/category')?'':'active' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/publisher" class="nav-link <?= !url_is('/publisher')?'':'active' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Publisher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/book" class="nav-link <?= !url_is('/book')?'':'active' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Book</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link <?= !(url_is('/borrower') or url_is('/borrow'))?'':'active' ?>">
                        <i class="nav-icon fa-solid fa-pen-to-square"></i>
                        <p>
                            Transaction
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/borrower" class="nav-link <?= !url_is('/borrower')?'':'active' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrower</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/borrow" class="nav-link <?= !url_is('/borrow')?'':'active' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrow</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/staff" class="nav-link <?= !url_is('/staff')?'':'active' ?>">
                        <i class="nav-icon fa-solid fa-address-card"></i>
                        <p>
                            Staff
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                        <p>
                            Log out
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <div class="sidebar-custom text-light overflow-hidden text-center">
        <p>
            Make with <i class="fa-solid fa-heart" style="color: #d21414;"></i> by Dimas
        </p>
    </div>
    <!-- /.sidebar -->
</aside>