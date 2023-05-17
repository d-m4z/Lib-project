<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Borrow Form</h3>
                </div>
                <form class="form-horizontal" action="/borrow/edit" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                    <input hidden type="text" name="id" value="<?= $borrow['id'] ?>">
                        <div class="row mb-3">
                            <label for="id_borrower" class="col-sm-2 col-form-label">Id_borrower</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-4 select2" id="id_borrower" name="id_borrower">
                                    <?php foreach ($borrower as $containt) : ?>
                                        <option value="<?= $containt['id'] ?>"><?= $containt['id'] ?>. <?= $containt['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_book" class="col-sm-2 col-form-label">Id_book</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-4 select2" id="id_book" name="id_book">
                                    <?php foreach ($book as $containt) : ?>
                                        <option value="<?= $containt['id'] ?>"><?= $containt['id'] ?>. <?= $containt['title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_staff" class="col-sm-2 col-form-label">Id_staff</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-4 select2" id="id_staff" name="id_staff">
                                    <?php foreach ($staff as $containt) : ?>
                                        <option value="<?= $containt['id'] ?>"><?= $containt['id'] ?>. <?= $containt['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="release_date" class="col-sm-2 col-form-label">Release_date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="release_date" name="release_date" value="<?= !$borrow['release_date']?old('release_date'):$borrow['release_date'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="due_date" class="col-sm-2 col-form-label">Due_date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="due_date" name="due_date" value="<?= !$borrow['due_date']?old('due_date'):$borrow['release_date'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="note" class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="note" name="note" value="<?= !$borrow['note']?old('note'):$borrow['note'] ?>">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>