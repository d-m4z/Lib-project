<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/borrow/save" method="post">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="contact" name="contact">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>