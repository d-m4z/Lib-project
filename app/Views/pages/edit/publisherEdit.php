<?php

use CodeIgniter\Commands\Utilities\Publish;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Publisher Form</h3>
                </div>
                <form class="form-horizontal" action="/publisher/edit" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                    <input hidden type="text" name="id" value="<?= $publisher['id'] ?>">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" autofocus value="<?= !$publisher['name']?old('name'):$publisher['name'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="<?= !$publisher['address']?old('address'):$publisher['address'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact" name="contact" value="<?= !$publisher['contact']?old('contact'):$publisher['contact'] ?>">
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