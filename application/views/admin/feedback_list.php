<div class="container mt-5">
    <h2>Feedback Pengguna</h2>
     <a href="<?= site_url('admin/feedback_form') ?>" class="btn btn-success mb-3">Tambah Feedback</a>
    <table class="table table-bordered">
        <thead><tr><th>Nama</th><th>Email</th><th>Pesan</th></tr></thead>
        <tbody>
        <?php if (!empty($feedbacks)): ?>
            <?php foreach ($feedbacks as $row): ?>
                <tr>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->pesan ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">Tidak ada data.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>