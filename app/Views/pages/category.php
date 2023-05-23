<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <h3 class="card-title text-lg">Category Table</h3>
                        <a class="btn-sm btn-primary" href="/category/create" role="button">Add Data</a>
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
                        <table id="example2" class="table table-striped table-responsive-sm table-hover">
                            <thead class="bg-dark">
                                <tr>
                                    <th style="width: 20px;">No</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($Category as $containt) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $containt['category'] ?></td>
                                        <td>
                                            <a href="/category/edit/<?= $containt['id']; ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                                            <form class="d-inline" action="/category/delete/<?= $containt['id']; ?>" method="POST">
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