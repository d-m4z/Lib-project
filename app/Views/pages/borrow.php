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
                        <table id="example2" class="table table-striped table-responsive-lg table-hover">
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
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>