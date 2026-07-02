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
                <a class="dropdown-item" href="../index.php">
                    <i class="bi bi-house-door"></i>
                    View Website
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item text-danger"
                    href="auth/logout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>