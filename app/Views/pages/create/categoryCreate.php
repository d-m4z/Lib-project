<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Category Form</h3>
                </div>
                <form class="form-horizontal" action="/category/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('category')) ? 'is-invalid' : ''; ?>" id="category" name="category" autofocus>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('category'); ?>
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