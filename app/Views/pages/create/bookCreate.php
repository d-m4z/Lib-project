<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/book/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (validation_show_error('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title'); ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('title'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="author" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="publication_year" class="col-sm-2 col-form-label">Publication_year</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="publication_year" name="publication_year">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_publisher" class="col-sm-2 col-form-label">Id_publisher</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_publisher" name="id_publisher">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_category" class="col-sm-2 col-form-label">Id_category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_category" name="id_category">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>