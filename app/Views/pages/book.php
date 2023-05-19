<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <h3 class="card-title text-lg">Book Table</h3>
                        <a class="d-flex btn-sm btn-primary" href="/book/create" role="button">Add Data</a>
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
                                    <th style="width: 20px;">No</th>
                                    <th style="width: 150px;">Title</th>
                                    <th>Author</th>
                                    <th>Publication_year</th>
                                    <th>Publisher</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($Book as $containt) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $containt['title'] ?></td>
                                        <td><?= $containt['author'] ?></td>
                                        <td><?= $containt['publication_year'] ?></td>
                                        <td><?= $containt['name'] ?></td>
                                        <td><?= $containt['category'] ?></td>
                                        <td><?= $containt['quantity'] ?></td>
                                        <td>
                                            <a href="/book/edit/<?= $containt['id']; ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                                            <form class="d-inline" action="/book/delete/<?= $containt['id']; ?>" method="POST">
                                                <?= csrf_field() ?>
                                                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
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