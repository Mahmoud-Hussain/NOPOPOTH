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
    <a href="#">Orders</a>
    <a href="#">Earnings</a>
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
          <section class="reviews">
            <h2>Reviews</h2>
            <div class="review-list">
              <div class="review-item">
                <h3>Review Title 1</h3>
                <p>Content of review 1.</p>
              </div>
              <div class="review-item">
                <h3>Review Title 2</h3>
                <p>Content of review 2.</p>
              </div>
            </div>
          </section>
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
            <h3>Job Title 1</h3>
            <p>Description of job 1.</p>
          </div>
          <div class="job-item">
            <h3>Job Title 2</h3>
            <p>Description of job 2.</p>
          </div>
          <div class="job-item">
            <h3>Job Title 3</h3>
            <p>Description of job 3.</p>
          </div>
          <div class="job-item">
            <h3>Job Title 4</h3>
            <p>Description of job 4.</p>
          </div>
        </div>
      </section>

      <!-- Messages -->
      <section class="messages">
        <h2>Messages</h2>
        <div class="message-list">
          <div class="message-item">
            <h3>Message Title 1</h3>
            <p>Content of message 1. This is a longer message that will be shown when expanded.</p>
          </div>
          <div class="message-item">
            <h3>Message Title 2</h3>
            <p>Content of message 2. This is another longer message that will be shown when expanded.</p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="student.js"></script>
</body>

</html>