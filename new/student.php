<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Nobopoth</title>
    <!-- Favicon -->
    <link rel="Icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="student.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body name="body-section">
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav" name="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" name="close-sidebar">×</a>
        <div class="logo" name="logo-container">
            <img src="image/logo.png" alt="Nobopoth Logo" name="logo-image">
            <span name="logo-text">Nobopoth</span>
        </div>
        <a href="#" name="dashboard-link">Dashboard</a>
        <a href="#" name="orders-link">Orders</a>
        <a href="#" class="category" name="category-link">
            Category
            <span class="arrow" name="category-arrow">&#9654;</span>
        </a>
        <div class="sub-list" name="sub-list">
            <a href="#" name="web-dev-link">Web Development</a>
            <a href="#" name="graphic-design-link">Graphic Design</a>
            <a href="#" name="writing-link">Writing</a>
            <a href="#" name="digital-marketing-link">Digital Marketing</a>
            <a href="#" name="video-animation-link">Video & Animation</a>
        </div>
        <a href="#" name="messages-link">Messages</a>
        <a href="#" name="settings-link">Settings</a>
        <a href="signin.php" name="logout-link">Logout</a>
    </div>

    <!-- Menu Icon -->
    <div class="menu-icon-container" name="menu-icon-container">
        <span class="menu-icon" onclick="openNav()" name="menu-icon">&#9776;</span>
    </div>

    <!-- Navbar -->
    <nav class="navbar" name="navbar">
        <div class="welcome" name="welcome-message">Welcome, [Student Name]</div>
        <div class="nav-options" name="nav-options">
            <div class="dropdown" name="category-dropdown">
                <span name="category-dropdown-text">Category</span>
                <div class="dropdown-content" name="category-dropdown-content">
                    <a href="#" name="web-dev-dropdown-link">Web Development</a>
                    <a href="#" name="graphic-design-dropdown-link">Graphic Design</a>
                    <a href="#" name="writing-dropdown-link">Writing</a>
                </div>
            </div>
            <div class="dropdown" name="jobs-dropdown">
                <span name="jobs-dropdown-text">Jobs</span>
                <div class="dropdown-content" name="jobs-dropdown-content">
                    <a href="#" name="job1-link">Job 1</a>
                    <a href="#" name="job2-link">Job 2</a>
                    <a href="#" name="job3-link">Job 3</a>
                </div>
            </div>
            <div class="dropdown" name="review-dropdown">
                <span name="review-dropdown-text">Review</span>
                <div class="dropdown-content" name="review-dropdown-content">
                    <a href="#" name="review1-link">Review 1</a>
                    <a href="#" name="review2-link">Review 2</a>
                    <a href="#" name="review3-link">Review 3</a>
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
                <p name="notification-message-1">You have a new message from <strong>Client A</strong>.</p>
                <small name="notification-time-1">2 hours ago</small>
            </div>
            <div class="notification-item" name="notification-item-2">
                <p name="notification-message-2">Your order for <strong>Web Development</strong> has been completed.</p>
                <small name="notification-time-2">5 hours ago</small>
            </div>
            <div class="notification-item" name="notification-item-3">
                <p name="notification-message-3">New job offer: <strong>Graphic Design</strong>.</p>
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
                    <div class="stat-item" name="total-earning-stat">
                        <h2 name="total-earning-title">Total Earning</h2>
                        <p name="total-earning-value">$5000</p>
                    </div>
                    <div class="stat-item" name="pending-orders-stat">
                        <h2 name="pending-orders-title">Pending Orders</h2>
                        <p name="pending-orders-value">2</p>
                    </div>
                    <div class="stat-item" name="total-orders-stat">
                        <h2 name="total-orders-title">Total Orders</h2>
                        <p name="total-orders-value">10</p>
                    </div>
                </div>
            </section>

            <!-- Search Bar and Reviews -->
            <div name="search-reviews-container">
                <!-- Search Bar -->
                <div class="search-bar" name="search-bar">
                    <input type="text" placeholder="Search..." name="search-input">
                    <button name="search-button">
                        <i class="fas fa-search" name="search-icon"></i>
                    </button>
                </div>

                <!-- Reviews -->
                <section class="reviews" name="reviews-section">
                    <h2 name="reviews-title">Reviews</h2>
                    <div class="review-list" name="review-list">
                        <div class="review-item" name="review-item-1">
                            <h3 name="review-title-1">Review from Client A</h3>
                            <p name="review-content-1">Client A was very satisfied with the work!</p>
                        </div>
                        <div class="review-item" name="review-item-2">
                            <h3 name="review-title-2">Review from Client B</h3>
                            <p name="review-content-2">Client B appreciated the timely delivery.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Popular Jobs and Messages -->
        <div class="jobs-messages-container" name="jobs-messages-container">
            <!-- Popular Jobs -->
            <section class="popular-jobs" name="popular-jobs-section">
                <h2 name="popular-jobs-title">Popular Jobs</h2>
                <div class="job-list" name="job-list">
                    <div class="job-item" name="job-item-1">
                        <h3 name="job-title-1">Web Developer</h3>
                        <p name="job-description-1">Build responsive websites using HTML, CSS, and JavaScript.</p>
                        <p name="job-price-1"><strong>Price:</strong> $200</p>
                    </div>
                    <div class="job-item" name="job-item-2">
                        <h3 name="job-title-2">Graphic Designer</h3>
                        <p name="job-description-2">Design logos, banners, and social media posts.</p>
                        <p name="job-price-2"><strong>Price:</strong> $150</p>
                    </div>
                    <div class="job-item" name="job-item-3">
                        <h3 name="job-title-3">Content Writer</h3>
                        <p name="job-description-3">Write engaging blog posts and articles.</p>
                        <p name="job-price-3"><strong>Price:</strong> $100</p>
                    </div>
                    <div class="job-item" name="job-item-4">
                        <h3 name="job-title-4">Digital Marketer</h3>
                        <p name="job-description-4">Run ad campaigns and optimize SEO.</p>
                        <p name="job-price-4"><strong>Price:</strong> $250</p>
                    </div>
                </div>
            </section>

            <!-- Messages -->
            <section class="messages" name="messages-section">
                <h2 name="messages-title">Messages</h2>
                <div class="message-list" name="message-list">
                    <div class="message-item" data-client="Client A" name="message-item-1">
                        <h3 name="message-client-1">Client A</h3>
                        <p name="message-content-1">Hello, can you provide an update on the project?</p>
                    </div>
                    <div class="message-item" data-client="Client B" name="message-item-2">
                        <h3 name="message-client-2">Client B</h3>
                        <p name="message-content-2">I need some changes to the design. Can we discuss?</p>
                    </div>
                    <div class="message-item" data-client="Client C" name="message-item-3">
                        <h3 name="message-client-3">Client C</h3>
                        <p name="message-content-3">Thanks for the quick delivery!</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="student.js" name="student-script"></script>
</body>
</html>