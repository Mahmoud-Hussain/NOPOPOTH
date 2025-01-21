<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard - Nobopoth</title>
    <link rel="stylesheet" href="student.css" />
    <link rel="Icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
  <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="image/logo.png" alt="Nobopoth Logo">
                    <span>Nobopoth</span>
                </a>
            </div>
            <nav class="nav">
                <a href="index.php" class="nav-link">Home</a>
                <a href="#" class="nav-link">About page</a>
                <div class="welcome">Welcome, [Student Name]</div>
            </nav>
        </div>
    </header>
    <!-- Main Content -->
    <main class="main-content">
      <header class="topbar">
        <form class="search-bar" action="search.php" method="GET">
          <input type="text" name="query" placeholder="Search for jobs..." />
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="notifications">
          <span class="icon"><i class="fas fa-bell"></i></span>
          <span class="icon"><i class="fas fa-envelope"></i></span>
        </div>
      </header>
      <section class="dashboard-section">
        <h1 class="fade-in">Dashboard Overview</h1>
        <div class="cards">
          <div class="card slide-in">
            <h2>Total Orders</h2>
            <p>45</p>
          </div>
          <div class="card slide-in">
            <h2>Pending Orders</h2>
            <p>5</p>
          </div>
          <div class="card slide-in">
            <h2>Earnings</h2>
            <p>$2,300</p>
          </div>
          <div class="card slide-in">
            <h2>Completed Orders</h2>
            <p>40</p>
          </div>
          <div class="card slide-in">
            <h2>New Messages</h2>
            <p>3</p>
          </div>
        </div>
      </section>
    </main>
    <script>
      // Add any additional JavaScript if needed
    </script>
  </body>
</html>
