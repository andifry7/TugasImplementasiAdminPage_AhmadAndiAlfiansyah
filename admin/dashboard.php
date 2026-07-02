<?php

require "session_check.php";
include "partials/header.php";
require "../config/koneksi.php";

$totalPortfolio = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM portfolio")
);

$totalTeam = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM team")
);

$totalAdmin = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM admin")
);

?>

<div class="admin-wrapper">
    <?php include "partials/sidebar.php"; ?>
    <div class="main-content">
        <?php include "partials/topbar.php"; ?>
        <div class="container-fluid">
            <!-- Welcome -->
            <div class="welcome-card mb-4">
                <div>
                    <h2><i class="bi bi-stars"></i>Welcome Back,
                        <?= $_SESSION['username']; ?>
                    </h2>
                    <p>
                        Manage your Pixel++ Company Profile from this dashboard.
                    </p>
                </div>
            </div>

            <!-- Statistic -->
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="dashboard-card">
                        <div class="card-icon">
                            <i class="bi bi-collection-fill"></i>
                        </div>
                        <div>
                            <h6>Total Portfolio</h6>
                            <h2><?= $totalPortfolio ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="dashboard-card">
                        <div class="card-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h6>Total Team</h6>
                            <h2><?= $totalTeam ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="dashboard-card">
                        <div class="card-icon">
                            <i class="bi bi-person-lock"></i>
                        </div>
                        <div>
                            <h6>Administrator</h6>
                            <h2><?= $totalAdmin ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Information -->
            <div class="row mt-4 g-4">
                <div class="col-lg-8">
                    <div class="activity-card">
                        <h4>
                            <i class="bi bi-lightning-charge-fill"></i>
                            Dashboard Information
                        </h4>
                        <p class="mt-3">
                            This admin panel allows you to manage the dynamic content
                            of the Pixel++ website. You can add, edit, or delete
                            portfolio projects and team members easily.
                        </p>
                        <div class="info-box">
                            <i class="bi bi-shield-lock-fill"></i>
                            <span>
                                Secure session authentication is currently active.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="activity-card">
                        <h4>
                            <i class="bi bi-clock-history"></i>
                            Quick Access
                        </h4>
                        <div class="quick-menu">
                            <a href="portfolio/">
                                <i class="bi bi-images"></i>
                                Portfolio
                            </a>
                            <a href="team/">
                                <i class="bi bi-people"></i>
                                Team
                            </a>
                            <a href="#">
                                <i class="bi bi-gear"></i>
                                Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>