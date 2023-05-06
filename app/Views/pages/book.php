<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">author</th>
                            <th scope="col">publication_year</th>
                            <th scope="col">id_publisher</th>
                            <th scope="col">id_category</th>
                            <th scope="col">quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Book as $containt) :?>
                        <tr>
                            <th scope="row"><?= $containt['id'] ?></th>
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
        </div>
    </div>
</div>
<?= $this->endSection(); ?>