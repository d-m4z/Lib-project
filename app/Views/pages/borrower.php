<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <h3 class="card-title text-lg">Borrower Table</h3>
                        <a class="btn-sm btn-primary" href="/borrower/create" role="button">Add Data</a>
                    </div>
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-default-success alert-dismissible" role="alert">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('message1')) : ?>
                        <div class="alert alert-default-danger alert-dismissible" role="alert">
                            <?= session()->getFlashdata('message1'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('msg-edit')) : ?>
                        <div class="alert alert-default-success alert-dismissible" role="alert">
                            <?= session()->getFlashdata('msg-edit'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <table class="table table-striped table-responsive-lg">
                            <thead class="bg-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Borrower as $containt) : ?>
                                    <tr>
                                        <td><?= $containt['name'] ?></td>
                                        <td><?= $containt['birthdate'] ?></td>
                                        <td><?= $containt['address'] ?></td>
                                        <td><?= $containt['gender'] ?></td>
                                        <td><?= $containt['contact'] ?></td>
                                        <td><?= $containt['email'] ?></td>
                                        <td>
                                            <a href="/borrower/edit/<?= $containt['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <form class="d-inline" action="/borrower/delete/<?= $containt['id']; ?>" method="POST">
                                                <?= csrf_field() ?>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>