<?php

require "../session_check.php";
require "../../config/koneksi.php";

include "../partials/header.php";

$result = mysqli_query($koneksi, "SELECT * FROM team ORDER BY id DESC");

?>

<div class="admin-wrapper">
    <?php include "../partials/sidebar.php"; ?>
    <div class="main-content">
        <?php include "../partials/topbar.php"; ?>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="mb-1">Team Management</h2>
                    <p class="text-secondary mb-0">
                        Manage your team members here.
                    </p>
                </div>
                <a href="tambah.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Add Team Member
                </a>
            </div>
            <div class="activity-card">
                <div class="table-responsive">
                    <table class="table table-dark table-hover align-middle">
                        <thead>
                            <tr>
                                <th width="60">No</th>
                                <th width="120">Image</th>
                                <th>Name</th>
                                <th width="170">Position</th>
                                <th width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img
                                            src="upload/<?= $row['image']; ?>"
                                            width="90"
                                            class="rounded">
                                    </td>
                                    <td>
                                        <strong><?= htmlspecialchars($row['name']); ?></strong>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">
                                            <?= $badge[$row['position']] ?? $row['position']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id']; ?>"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="hapus.php?id=<?= $row['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus team member ini?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../partials/footer.php"; ?>