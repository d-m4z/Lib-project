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
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Staff as $containt) : ?>
                            <tr>
                                <th scope="row"><?= $containt['id'] ?></th>
                                <td><?= $containt['name'] ?></td>
                                <td><?= $containt['email'] ?></td>
                                <td><?= $containt['password'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>