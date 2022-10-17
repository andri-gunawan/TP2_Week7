<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->

    <h4>Selamat Datang, anda login sebagai <?= session()->get('role') ?></h4>

</div>
<!-- /.container-fluid -->


<?= $this->endSection(''); ?>