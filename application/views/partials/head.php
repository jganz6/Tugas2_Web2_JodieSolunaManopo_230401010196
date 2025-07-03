<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Admin Panel' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="w-full d-flex bg-dark justify-content-center pt-2">
    <!-- Search Bar -->
    <form action="" method="get" class="input-group mb-3 w-25 ">
        <input type="text" class="form-control" placeholder="Cari data..." name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
        <button class="btn btn-primary" type="submit">Cari</button>
    </form>

    <!-- Hasil pencarian (contoh) -->
    <?php if (!empty($_GET['search'])): ?>
        <div class="alert alert-info">
            Menampilkan hasil pencarian untuk: <strong><?= htmlspecialchars($_GET['search']) ?></strong>
        </div>
    <?php endif; ?>

    <!-- Konten lainnya di sini -->
</div>
