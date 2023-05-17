<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Staff Form</h3>
                </div>
                <form class="form-horizontal" action="/staff/edit" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <input hidden type="text" name="id" value="<?= $staff['id'] ?>">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" autofocus value="<?= !$staff['name'] ? old('name') : $staff['name'] ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="<?= !$staff['email'] ? old('email') : $staff['email'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" value="<?= !$staff['password'] ? old('password') : $staff['password'] ?>">
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