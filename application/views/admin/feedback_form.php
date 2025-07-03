<div class="container mt-5">
    <h2><?= isset($feedback) ? 'Edit' : 'Tambah' ?> Feedback</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= set_value('nama', $feedback->nama ?? '') ?>">
            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?= set_value('email', $feedback->email ?? '') ?>">
            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="mb-3">
            <label for="pesan">Pesan</label>
            <textarea class="form-control" name="pesan" rows="5"><?= set_value('pesan', $feedback->pesan ?? '') ?></textarea>
            <?= form_error('pesan', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
