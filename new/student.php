<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freelancer Dashboard - Nobopoth</title>
    <link rel="stylesheet" href="student.css" />
  </head>
  <body>
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#">Dashboard</a>
      <a href="mygigs.html">My Gigs</a>
      <a href="#">Orders</a>
      <a href="#">Earnings</a>
      <a href="#">Messages</a>
      <a href="#">Settings</a>
      <a href="#">Logout</a>
    </div>

    <!-- Menu Icon -->
    <span class="menu-icon" onclick="openNav()">&#9776;</span>

    <!-- Main Content -->
    <div class="main-content" id="main">
      <header class="header">
        <div class="logo">
          <img src="logo.png" alt="Logo" />
          <span class="site-name">Nobopoth</span>
        </div>
        <div class="navbar">
          <div class="welcome">Welcome, [Student Name]</div>
          <div class="category-jobs-review">
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
            <span class="icon">🔔</span>
            <span class="icon">📧</span>
          </div>
        </div>
      </header>

      <section class="dashboard-section">
        <h1>Dashboard Overview</h1>
        <div class="cards">
          <div class="card">
            <h2>Total Orders</h2>
            <p>45</p>
          </div>
          <div class="card">
            <h2>Pending Orders</h2>
            <p>5</p>
          </div>
          <div class="card">
            <h2>Earnings</h2>
            <p>$2,300</p>
          </div>
        </div>
      </section>
    </div>

    <!-- JavaScript -->
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").classList.add("shifted");
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").classList.remove("shifted");
      }
    </script>
  </body>
</html>
