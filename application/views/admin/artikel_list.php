<div class="container mt-5">
    <h2>Daftar Artikel</h2>
    <a href="<?= site_url('admin/artikel_form') ?>" class="btn btn-success mb-3">Tambah Artikel</a>
    <table class="table table-bordered">
        <thead><tr><th>Judul</th><th>Status</th><th>Aksi</th></tr></thead>
        <tbody>
        <?php foreach ($artikel as $a): ?>
            <tr>
                <td><?= $a->judul ?></td>
                <td><?= $a->status ?></td>
                <td>
                    <a href="<?= site_url('admin/artikel_form/'.$a->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="confirmDelete('<?= site_url('admin/artikel_delete/'.$a->id) ?>')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>