<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header align-items-center">
                    <h4>Home</h4>
                </div>
                <div class="card-body text-justify">
                    <p>Ini adalah "LibProject." sebuah website yang mengelola administrasi peminjaman buku, silahkan <strong>login</strong> jika anda ingin melakukan pengelolaan data.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>