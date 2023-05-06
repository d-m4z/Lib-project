<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-secondary table-bordered border-dark table-striped">
                    <thead>
                        <tr class="bg-dark">
                            <th scope="col">id</th>
                            <th scope="col">category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Category as $containt) : ?>
                            <tr>
                                <th scope="row"><?= $containt['id'] ?></th>
                                <td><?= $containt['category'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>