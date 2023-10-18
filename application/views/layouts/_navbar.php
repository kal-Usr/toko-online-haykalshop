<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('') ?>">Sinar Mas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
                            <a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
                            <a href="<?= base_url('order') ?>" class="dropdown-item">Order</a>
                            <a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="mailto:tokoonline618@gmail.com" class="nav-link text-light">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('cart') ?>" class="nav-link text-light"><i class="fas fa-shopping-cart"></i> Cart (<?= getCart(); ?>)</a>
                </li>
                <?php if (!$this->session->userdata('is_login')) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('/login') ?>" class="nav-link text-light">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('/register') ?>" class="nav-link text-light">Register</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-regular fa-user"></i> <?= $this->session->userdata('name') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-2">
                            <a href="<?= base_url('/profile') ?>" class="dropdown-item">Profile</a>
                            <a href="<?= base_url("/myorder") ?>" class="dropdown-item">Orders</a>
                            <a href="<?= base_url('/logout') ?>" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
