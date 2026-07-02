<div class="sidebar">
    <div class="sidebar-logo">
        <h2>Pixel++</h2>
        <small>Admin Panel</small>
    </div>
    <ul class="sidebar-menu">
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>admin/dashboard.php">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="<?= strpos($_SERVER['PHP_SELF'], 'portfolio') ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>admin/portfolio/">
                <i class="bi bi-collection-fill"></i>
                <span>Portfolio</span>
            </a>
        </li>
        <li class="<?= strpos($_SERVER['PHP_SELF'], 'team') ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>admin/team/">
                <i class="bi bi-people-fill"></i>
                <span>Team</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <small>Pixel++ Admin v1.0</small>
    </div>
</div>