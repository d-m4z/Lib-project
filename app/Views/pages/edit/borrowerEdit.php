<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Borrower Form</h3>
                </div>
                <form class="form-horizontal" action="/borrower/edit" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                    <input hidden type="text" name="id" value="<?= $borrower['id'] ?>">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" autofocus value="<?= !$borrower['name']?old('name'):$borrower['name'] ?>">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('name'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= !$borrower['birthdate']?old('birthdate'):$borrower['birthdate'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('address')) ? 'is-invalid' : ''; ?>" id="address" name="address" value="<?= !$borrower['address']?old('address'):$borrower['address'] ?>">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('address'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('gender')) ? 'is-invalid' : ''; ?>" id="gender" name="gender" value="<?= !$borrower['gender']?old('gender'):$borrower['gender'] ?>">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('gender'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control <?= (validation_show_error('contact')) ? 'is-invalid' : ''; ?>" id="contact" name="contact" value="<?= !$borrower['contact']?old('contact'):$borrower['contact'] ?>">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('contact'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control <?= (validation_show_error('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= !$borrower['email']?old('email'):$borrower['email'] ?>">
                                <div class="invalid-feedback">
                                    <?= validation_show_error('email'); ?>
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