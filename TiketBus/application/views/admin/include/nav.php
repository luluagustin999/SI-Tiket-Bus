<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><b>Admin E-BUS</b></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/homepage') ?>"><b>Home</b> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>"><b>Kelola Terminal</b> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/dashboard/kelola-jadwal') ?>"><b>Kelola Jadwal</b></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/dataPenumpang') ?>"><b>Data User</b></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/konfirmasi-pembayaran') ?>"><b>Konfirmasi Pembayaran</b></a>
        </li>
    </ul>
    <span class="navbar-text">
        <a class="text-white btn btn-danger" href="<?= base_url('logout')?>" style="text-decoration: none"><b>Logout</b></a>
    </span>
    </div>
</nav>