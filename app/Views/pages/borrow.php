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
                            <th scope="col">id_borrower</th>
                            <th scope="col">id_book</th>
                            <th scope="col">id_staff</th>
                            <th scope="col">release_date</th>
                            <th scope="col">due_date</th>
                            <th scope="col">note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Borrow as $containt) :?>
                        <tr>
                            <th scope="row"><?= $containt['id'] ?></th>
                            <td><?= $containt['id_borrower'] ?></td>
                            <td><?= $containt['id_book'] ?></td>
                            <td><?= $containt['id_staff'] ?></td>
                            <td><?= $containt['release_date'] ?></td>
                            <td><?= $containt['due_date'] ?></td>
                            <td><?= $containt['note'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>