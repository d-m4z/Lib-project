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
                            <th scope="col">name</th>
                            <th scope="col">address</th>
                            <th scope="col">contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Publisher as $containt) :?>
                        <tr>
                            <th scope="row"><?= $containt['id'] ?></th>
                            <td><?= $containt['name'] ?></td>
                            <td><?= $containt['address'] ?></td>
                            <td><?= $containt['contact'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>