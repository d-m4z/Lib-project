<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Book Form</h3>
                </div>
                <form class="form-horizontal" action="/book/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
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
                                <input type="text" class="form-control <?= (validation_show_error('author')) ? 'is-invalid' : ''; ?>" id="author" name="author">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('author'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="publication_year" class="col-sm-2 col-form-label">Publication_year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('publication_year')) ? 'is-invalid' : ''; ?>" id="publication_year" name="publication_year">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('publication_year'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_publisher" class="col-sm-2 col-form-label">Id_publisher</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-3" id="id_publisher" name="id_publisher" width="20px">
                                    <?php foreach ($publisher as $containt) : ?>
                                        <option value="<?= $containt['id'] ?>"><?= $containt['id'] ?>. <?= $containt['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_category" class="col-sm-2 col-form-label">Id_category</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-3" id="id_category" name="id_category">
                                    <?php foreach ($category as $containt) : ?>
                                        <option value="<?= $containt['id'] ?>"><?= $containt['id'] ?>. <?= $containt['category'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="quantity" name="quantity">
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