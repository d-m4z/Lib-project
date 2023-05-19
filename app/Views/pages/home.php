<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Book</span>
                    <span class="info-box-number">
                        <?= $qbook ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-face-smile"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Borrower</span>
                    <span class="info-box-number"><?= $qborrower ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Borrow</span>
                    <span class="info-box-number"><?= $qborrow ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa-regular fa-id-card"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Staff</span>
                    <span class="info-box-number"><?= $qstaff ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Category
                    </h5>
                </div>
                <div class="card-body">
                    <div class="progress-name">
                        Now Had <?= $qcategory ?> Data (Target is 100)
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $qcategory ?>%" aria-valuenow="<?= $qcategory ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Publisher
                    </h5>
                </div>
                <div class="card-body">
                    <div class="progress-name">
                        Now Had <?= $qpublisher ?> Data (Target is 100)
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $qpublisher ?>%" aria-valuenow="<?= $qpublisher ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</div>
<?= $this->endSection(); ?>