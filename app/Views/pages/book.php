<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <h3 class="card-title text-lg">Book Table</h3>
                        <a class="btn-sm btn-primary" href="/book/create" role="button">Add Data</a>
                    </div>
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-default-success" role="alert">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <table class="table table-bordered table-responsive-lg">
                            <thead class="bg-dark">
                                <tr>
                                    <th style="width: 20px">Id</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publication_year</th>
                                    <th>Id_publisher</th>
                                    <th>Id_category</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Book as $containt) : ?>
                                    <tr>
                                        <td><?= $containt['id'] ?></td>
                                        <td><?= $containt['title'] ?></td>
                                        <td><?= $containt['author'] ?></td>
                                        <td><?= $containt['publication_year'] ?></td>
                                        <td><?= $containt['id_publisher'] ?></td>
                                        <td><?= $containt['id_category'] ?></td>
                                        <td><?= $containt['quantity'] ?></td>
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