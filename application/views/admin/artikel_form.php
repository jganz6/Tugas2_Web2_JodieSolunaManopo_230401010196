<div class="container mt-5">
    <h2><?= isset($artikel) ? 'Edit' : 'Tambah' ?> Artikel</h2>
    <form method="post">
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="<?= set_value('judul', $artikel->judul ?? '') ?>">
            <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
            <select class="form-control" name="status">
                <option value="draft" <?= isset($artikel) && $artikel->status == 'draft' ? 'selected' : '' ?>>Draft</option>
                <option value="published" <?= isset($artikel) && $artikel->status == 'published' ? 'selected' : '' ?>>Published</option>
            </select>
            <?= form_error('status', '<small class="text-danger">', '</small>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>