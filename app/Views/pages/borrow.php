<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <h3 class="card-title text-lg">Borrow Table</h3>
                        <a class="btn-sm btn-primary" href="/borrow/create" role="button">Add Data</a>
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
                                    <th>Id_borrower</th>
                                    <th>Id_book</th>
                                    <th>Id_staff</th>
                                    <th>Release_date</th>
                                    <th>Due_date</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Borrow as $containt) : ?>
                                    <tr>
                                        <td><?= $containt['client'] ?></td>
                                        <td><?= $containt['title'] ?></td>
                                        <td><?= $containt['name'] ?></td>
                                        <td><?= $containt['release_date'] ?></td>
                                        <td><?= $containt['due_date'] ?></td>
                                        <td><?= $containt['note'] ?></td>
                                        <td>
                                            <a href="/borrow/edit/<?= $containt['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <form class="d-inline" action="/borrow/delete/<?= $containt['id']; ?>" method="POST">
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