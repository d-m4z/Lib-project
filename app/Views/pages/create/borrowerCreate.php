<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Borrower Form</h3>
                </div>
                <form class="form-horizontal" action="/borrower/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="birthdate" name="birthdate">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gender" name="gender">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email">
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