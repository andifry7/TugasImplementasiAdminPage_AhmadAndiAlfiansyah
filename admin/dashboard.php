<?php

require "session_check.php";
include "partials/header.php";

?>

<div class="admin-wrapper">
    <?php include "partials/sidebar.php"; ?>
    <div class="main-content">
        <?php include "partials/topbar.php"; ?>
        <div class="container-fluid">
            <div class="welcome-card">
                <h2>Welcome Back</h2>
                <p>
                    Manage your Pixel++ company profile from one place.
                </p>
            </div>
            <div class="row mt-4 g-4">
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <i class="bi bi-collection"></i>
                        <h3>Portfolio</h3>
                        <span>0</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <i class="bi bi-people"></i>
                        <h3>Team</h3>
                        <span>0</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-card">
                        <i class="bi bi-bar-chart"></i>
                        <h3>Visitors</h3>
                        <span>0</span>
                    </div>
                </div>
            </div>
            <div class="activity-card mt-4">
                <h4>Recent Activity</h4>
                <ul>
                    <li>Portfolio updated</li>
                    <li>Team member added</li>
                    <li>Admin logged in</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>