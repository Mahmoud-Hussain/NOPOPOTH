<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Nobopoth</title>
    <!-- Favicon -->
    <link rel="Icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav" name="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" name="close-sidebar">×</a>
        <div class="logo" name="logo-container">
            <img src="image/logo.png" alt="Nobopoth Logo" name="logo-image">
            <span name="logo-text">Nobopoth</span>
        </div>
        <a href="#" name="dashboard-link">Dashboard</a>
        <a href="#" name="posted-jobs-link">Posted Jobs</a>
        <a href="#" name="pending-orders-link">Pending Orders</a>
        <a href="#" class="category" name="category-link">
            Categories
            <span class="arrow" name="category-arrow">&#9654;</span>
        </a>
        <div class="sub-list" name="sub-list">
            <a href="#" name="web-dev-link">Web Development</a>
            <a href="#" name="graphic-design-link">Graphic Design</a>
            <a href="#" name="writing-link">Writing</a>
            <a href="#" name="digital-marketing-link">Digital Marketing</a>
            <a href="#" name="video-animation-link">Video & Animation</a>
        </div>
        <a href="#" name="reviews-link">Reviews</a>
        <a href="#" name="messages-link">Messages</a>
        <a href="#enrolled-students-section" name="enrolled-students-link">Enrolled Students</a>
        <a href="#" name="settings-link">Settings</a>
        <a href="#" name="logout-link">Logout</a>
    </div>

    <!-- Menu Icon -->
    <div class="menu-icon-container" name="menu-icon-container">
        <span class="menu-icon" onclick="openNav()" name="menu-icon">&#9776;</span>
    </div>

    <!-- Navbar -->
    <nav class="navbar" name="navbar">
        <div class="welcome" name="welcome-message">Welcome, [Admin Name]</div>
        <div class="nav-options" name="nav-options">
            <div class="dropdown" name="category-dropdown">
                <span name="category-dropdown-text">Categories</span>
                <div class="dropdown-content" name="category-dropdown-content">
                    <a href="#" name="web-dev-dropdown-link">Web Development</a>
                    <a href="#" name="graphic-design-dropdown-link">Graphic Design</a>
                    <a href="#" name="writing-dropdown-link">Writing</a>
                </div>
            </div>
            <div class="dropdown" name="jobs-dropdown">
                <span name="jobs-dropdown-text">Jobs</span>
                <div class="dropdown-content" name="jobs-dropdown-content">
                    <a href="#" name="full-time-link">Full-Time</a>
                    <a href="#" name="part-time-link">Part-Time</a>
                    <a href="#" name="freelance-link">Freelance</a>
                </div>
            </div>
        </div>
        <div class="notifications" name="notifications">
            <span class="icon" name="notification-icon"><i class="fas fa-bell"></i></span>
        </div>
    </nav>

    <!-- Notification Popup -->
    <div class="notification-popup" id="notificationPopup" name="notification-popup">
        <div class="notification-header" name="notification-header">
            <h3 name="notification-title">Notifications</h3>
            <span class="close-btn" onclick="closeNotificationPopup()" name="notification-close-btn">×</span>
        </div>
        <div class="notification-list" name="notification-list">
            <div class="notification-item" name="notification-item-1">
                <p name="notification-message-1">You have a new application for <strong>Web Developer</strong>.</p>
                <small name="notification-time-1">2 hours ago</small>
            </div>
            <div class="notification-item" name="notification-item-2">
                <p name="notification-message-2">Your job posting for <strong>Graphic Designer</strong> has been approved.</p>
                <small name="notification-time-2">5 hours ago</small>
            </div>
            <div class="notification-item" name="notification-item-3">
                <p name="notification-message-3">New message from <strong>Student A</strong>.</p>
                <small name="notification-time-3">1 day ago</small>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main" name="main-content">
        <!-- Dashboard Overview and Search Bar -->
        <div class="dashboard-search-container" name="dashboard-search-container">
            <!-- Dashboard Overview -->
            <section class="dashboard-overview" name="dashboard-overview">
                <h1 name="dashboard-title">Dashboard Overview</h1>
                <div class="stats" name="stats-container">
                    <div class="stat-item" name="total-posted-jobs-stat">
                        <h2 name="total-posted-jobs-title">Total Posted Jobs</h2>
                        <p name="total-posted-jobs-value">10</p>
                    </div>
                    <div class="stat-item" name="pending-orders-stat">
                        <h2 name="pending-orders-title">Pending Applications</h2>
                        <p name="pending-orders-value">20</p>
                    </div>
                    <div class="stat-item" name="total-done-jobs-stat">
                        <h2 name="total-done-jobs-title">Total Hired Students</h2>
                        <p name="total-done-jobs-value">10</p>
                    </div>
                </div>
            </section>

            <!-- Search Bar and Reviews -->
            <div name="search-reviews-container">
                <!-- Search Bar -->
                <div class="search-bar" name="search-bar">
                    <input type="text" placeholder="Search for Students..." name="search-input">
                    <button name="search-button">
                        <i class="fas fa-search" name="search-icon"></i>
                    </button>
                </div>

                <!-- Reviews -->
                <section class="reviews" name="reviews-section">
                    <h2 name="reviews-title">Student Reviews</h2>
                    <div class="review-list" name="review-list">
                        <div class="review-item" name="review-item-1">
                            <h3 name="review-title-1">Review for Student A</h3>
                            <p name="review-content-1">Student A delivered excellent work!</p>
                        </div>
                        <div class="review-item" name="review-item-2">
                            <h3 name="review-title-2">Review for Student B</h3>
                            <p name="review-content-2">Student B was very professional.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Popular Jobs and Messages -->
        <div class="jobs-messages-container" name="jobs-messages-container">
            <!-- Popular Jobs -->
            <section class="popular-jobs" name="popular-jobs-section">
                <h2 name="popular-jobs-title">Posted Jobs</h2>
                <div class="job-list" name="job-list">
                    <div class="job-item" name="job-item-1">
                        <h3 name="job-title-1">Web Developer</h3>
                        <p name="job-description-1">Looking for a skilled web developer to build a responsive website.</p>
                        <p name="job-price-1"><strong>Budget:</strong> $2000</p>
                    </div>
                    <div class="job-item" name="job-item-2">
                        <h3 name="job-title-2">Graphic Designer</h3>
                        <p name="job-description-2">Need a graphic designer for logo and branding.</p>
                        <p name="job-price-2"><strong>Budget:</strong> $500</p>
                    </div>
                    <div class="job-item" name="job-item-3">
                        <h3 name="job-title-3">Content Writer</h3>
                        <p name="job-description-3">Hiring a content writer for blog posts and articles.</p>
                        <p name="job-price-3"><strong>Budget:</strong> $300</p>
                    </div>
                </div>
            </section>

            <!-- Messages -->
            <section class="messages" name="messages-section">
                <h2 name="messages-title">Messages</h2>
                <div class="message-list" name="message-list">
                    <div class="message-item" data-client="Student A" name="message-item-1">
                        <h3 name="message-client-1">Student A</h3>
                        <p name="message-content-1">Hello, I'm interested in your job posting.</p>
                    </div>
                    <div class="message-item" data-client="Student B" name="message-item-2">
                        <h3 name="message-client-2">Student B</h3>
                        <p name="message-content-2">Can we discuss the project details?</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Enrolled Students Section -->
        <section class="enrolled-students" id="enrolled-students-section" name="enrolled-students-section">
            <h2 name="enrolled-students-title">Enrolled Students</h2>
            <table class="enrolled-table" name="enrolled-table">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Students Enrolled</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Web Developer</td>
                        <td>Student A, Student B</td>
                    </tr>
                    <tr>
                        <td>Graphic Designer</td>
                        <td>Student C</td>
                    </tr>
                    <tr>
                        <td>Content Writer</td>
                        <td>Student D, Student E</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <!-- Post Job Popup -->
<div class="post-job-popup" id="postJobPopup" name="post-job-popup">
    <div class="post-job-header" name="post-job-header">
        <h3 name="post-job-title">Post a New Job</h3>
        <span class="close-btn" onclick="closePostJobPopup()" name="post-job-close-btn">×</span>
    </div>
    <div class="post-job-content" name="post-job-content">
        <form action="submit_job.php" method="POST">
            <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" id="job-title" name="job-title" placeholder="Enter job title" required>
            </div>
            <div class="form-group">
                <label for="job-description">Job Description</label>
                <textarea id="job-description" name="job-description" placeholder="Enter job description" required></textarea>
            </div>
            <div class="form-group">
                <label for="job-category">Job Category</label>
                <select id="job-category" name="job-category" required>
                    <option value="web-development">Web Development</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="writing">Writing</option>
                    <option value="digital-marketing">Digital Marketing</option>
                    <option value="video-animation">Video & Animation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job-budget">Budget</label>
                <input type="number" id="job-budget" name="job-budget" placeholder="Enter budget" required>
            </div>
            <button type="submit" class="submit-button">Post Job</button>
        </form>
    </div>
</div>

    <!-- Floating Action Button (FAB) for Posting Jobs -->
    <a href="post_job.php" class="fab" name="fab-post-job">
        <i class="fas fa-plus"></i>
    </a>

    <!-- JavaScript -->
    <script src="admin.js" name="admin-script"></script>
</body>
</html>