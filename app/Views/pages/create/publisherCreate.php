<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Publisher Form</h3>
                </div>
                <form class="form-horizontal" action="/publisher/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" autofocus>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('name'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('address')) ? 'is-invalid' : ''; ?>" id="address" name="address">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('address'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('contact')) ? 'is-invalid' : ''; ?>" id="contact" name="contact">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('contact'); ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>