<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Nobopoth</title>
    <link rel="stylesheet" href="student.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="logo">
            <img src="image/logo.png" alt="Nobopoth Logo">
            <span>Nobopoth</span>
        </div>
        <a href="#">Dashboard</a>
        <a href="mygigs.html">My Gigs</a>
        <a href="#">Orders</a>
        <a href="#" class="category">
            Category
            <span class="arrow">&#9654;</span>
        </a>
        <div class="sub-list">
            <a href="#">Web Development</a>
            <a href="#">Graphic Design</a>
            <a href="#">Writing</a>
            <a href="#">Digital Marketing</a>
            <a href="#">Video & Animation</a>
        </div>
        <a href="#">Messages</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <!-- Menu Icon -->
    <div class="menu-icon-container">
        <span class="menu-icon" onclick="openNav()">&#9776;</span>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="welcome">Welcome, [Student Name]</div>
        <div class="nav-options">
            <div class="dropdown">
                <span>Category</span>
                <div class="dropdown-content">
                    <a href="#">Web Development</a>
                    <a href="#">Graphic Design</a>
                    <a href="#">Writing</a>
                </div>
            </div>
            <div class="dropdown">
                <span>Jobs</span>
                <div class="dropdown-content">
                    <a href="#">Job 1</a>
                    <a href="#">Job 2</a>
                    <a href="#">Job 3</a>
                </div>
            </div>
            <div class="dropdown">
                <span>Review</span>
                <div class="dropdown-content">
                    <a href="#">Review 1</a>
                    <a href="#">Review 2</a>
                    <a href="#">Review 3</a>
                </div>
            </div>
        </div>
        <div class="notifications">
            <span class="icon"><i class="fas fa-bell"></i></span>
        </div>
    </nav>

    <!-- Notification Popup -->
    <div class="notification-popup" id="notificationPopup">
        <div class="notification-header">
            <h3>Notifications</h3>
            <span class="close-btn" onclick="closeNotificationPopup()">×</span>
        </div>
        <div class="notification-list">
            <div class="notification-item">
                <p>You have a new message from <strong>Client A</strong>.</p>
                <small>2 hours ago</small>
            </div>
            <div class="notification-item">
                <p>Your order for <strong>Web Development</strong> has been completed.</p>
                <small>5 hours ago</small>
            </div>
            <div class="notification-item">
                <p>New job offer: <strong>Graphic Design</strong>.</p>
                <small>1 day ago</small>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main">
        <!-- Dashboard Overview and Search Bar -->
        <div class="dashboard-search-container">
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
                <h1>Dashboard Overview</h1>
                <div class="stats">
                    <div class="stat-item">
                        <h2>Total Earning</h2>
                        <p>$5000</p>
                    </div>
                    <div class="stat-item">
                        <h2>Pending Orders</h2>
                        <p>2</p>
                    </div>
                    <div class="stat-item">
                        <h2>Total Orders</h2>
                        <p>10</p>
                    </div>
                </div>
            </section>

            <!-- Search Bar and Reviews -->
            <div>
                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <!-- Reviews -->
                <section class="reviews">
                    <h2>Reviews</h2>
                    <div class="review-list">
                        <div class="review-item">
                            <h3>Review from Client A</h3>
                            <p>Client A was very satisfied with the work!</p>
                        </div>
                        <div class="review-item">
                            <h3>Review from Client B</h3>
                            <p>Client B appreciated the timely delivery.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Popular Jobs and Messages -->
        <div class="jobs-messages-container">
            <!-- Popular Jobs -->
            <section class="popular-jobs">
                <h2>Popular Jobs</h2>
                <div class="job-list">
                    <div class="job-item">
                        <h3>Web Developer</h3>
                        <p>Build responsive websites using HTML, CSS, and JavaScript.</p>
                        <p><strong>Price:</strong> $200</p>
                    </div>
                    <div class="job-item">
                        <h3>Graphic Designer</h3>
                        <p>Design logos, banners, and social media posts.</p>
                        <p><strong>Price:</strong> $150</p>
                    </div>
                    <div class="job-item">
                        <h3>Content Writer</h3>
                        <p>Write engaging blog posts and articles.</p>
                        <p><strong>Price:</strong> $100</p>
                    </div>
                    <div class="job-item">
                        <h3>Digital Marketer</h3>
                        <p>Run ad campaigns and optimize SEO.</p>
                        <p><strong>Price:</strong> $250</p>
                    </div>
                </div>
            </section>

            <!-- Messages -->
            <section class="messages">
                <h2>Messages</h2>
                <div class="message-list">
                    <div class="message-item" data-client="Client A">
                        <h3>Client A</h3>
                        <p>Hello, can you provide an update on the project?</p>
                    </div>
                    <div class="message-item" data-client="Client B">
                        <h3>Client B</h3>
                        <p>I need some changes to the design. Can we discuss?</p>
                    </div>
                    <div class="message-item" data-client="Client C">
                        <h3>Client C</h3>
                        <p>Thanks for the quick delivery!</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="student.js"></script>
</body>
</html>