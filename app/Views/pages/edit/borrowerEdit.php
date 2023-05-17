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
                                <input type="text" class="form-control" id="name" name="name" autofocus value="<?= !$borrower['name']?old('name'):$borrower['name'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= !$borrower['date']?old('date'):$borrower['date'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="<?= !$borrower['address']?old('address'):$borrower['address'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gender" name="gender" value="<?= !$borrower['gender']?old('gender'):$borrower['gender'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="contact" name="contact" pattern="[0-9]{13}" value="<?= !$borrower['contact']?old('contact'):$borrower['contact'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="<?= !$borrower['email']?old('email'):$borrower['email'] ?>">
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