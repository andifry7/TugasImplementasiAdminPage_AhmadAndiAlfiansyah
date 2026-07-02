<div class="topbar">
    <div class="topbar-title">
        <h3>Dashboard</h3>
    </div>
    <div class="dropdown">
        <button
            class="btn btn-profile dropdown-toggle"
            data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i>
            <?= $_SESSION['username']; ?>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <a href="<?= BASE_URL ?>index.php"
                class="btn btn-outline-primary"
                target="_blank">
                    <i class="bi bi-globe"></i>
                    View Website
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>admin/logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>