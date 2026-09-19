<?php
include 'dbsetting.php';

$social=mysqli_query($conx,'SELECT * FROM `register`');
$sns= mysqli_fetch_assoc($social);
/print_r($sns)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Right Sidebar</title>
    <!-- Boxicons for modern icons -->
    <link href="https://unpkg.com" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="dashboard-container">
        
        <!-- Left Sidebar (Placeholder) -->
        <aside class="left-sidebar">
            <div class="logo">AdminOS</div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <header class="top-bar">
                <h1>Welcome Back, Admin</h1>
            </header>
            <div class="content-body">
                <p>Your main dashboard analytics and widgets go here...</p>
            </div>
        </main>

        <!-- Right Sidebar Menu -->
        <aside class="right-sidebar">
            
            <!-- User Profile Section -->
            <div class="profile-section">
                <img src="https://unsplash.com" alt="Admin Avatar" class="avatar">
                <div class="profile-info">
                    <h3>Sarah Jenkins</h3>
                    <p>Super Admin</p>
                </div>
            </div>

            <!-- Notifications Section -->
            <div class="sidebar-section">
                <h4 class="section-title">Recent Alerts</h4>
                <ul class="notification-list">
                    <li class="notification-item unread">
                        <i class='bx bx-layer alert-icon'></i>
                        <div class="alert-text">
                            <p><strong>Server load</strong> exceeded 85%</p>
                            <span>2 mins ago</span>
                        </div>
                    </li>
                    <li class="notification-item">
                        <i class='bx bx-user-plus alert-icon'></i>
                        <div class="alert-text">
                            <p>New vendor registration request</p>
                            <span>1 hour ago</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Quick Actions Section -->
            <div class="sidebar-section">
                <h4 class="section-title">Quick Actions</h4>
                <div class="action-grid">
                    <button class="action-btn"><i class='bx bx-plus-circle'></i> Add User</button>
                    <button class="action-btn"><i class='bx bx-export'></i> Export CSV</button>
                    <button class="action-btn"><i class='bx bx-cog'></i> Settings</button>
                </div>
            </div>

        </aside>

    </div>

</body>
</html>
