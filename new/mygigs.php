<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gigs</title>
    <link rel="stylesheet" href="mygigs.css">
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="freelencer.php">Dashboard</a>
        <a href="#my-gigs">My Gigs</a>
        <a href="#profile">Profile</a>
        <a href="#settings">Settings</a>
        <a href="#logout">Logout</a>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="closeNav()"></div>

    <!-- Main Content -->
    <div class="container">
        <header class="topbar">
            <span class="sidebar-toggle" onclick="openNav()">&#9776;</span>
            <h1>My Gigs</h1>
            <div class="search-filter">
                <input type="text" class="search-bar" placeholder="Search gigs...">
                <select class="filter-dropdown">
                    <option value="all">All Categories</option>
                    <option value="design">Design</option>
                    <option value="development">Development</option>
                    <option value="marketing">Marketing</option>
                </select>
            </div>
        </header>
        <section class="gigs-list">
            <div class="gig-card">
                <img src="https://via.placeholder.com/300x200" alt="Gig Image">
                <h2>Website Design</h2>
                <p>Create stunning websites for businesses.</p>
                <button>View Details</button>
            </div>
            <div class="gig-card">
                <img src="https://via.placeholder.com/300x200" alt="Gig Image">
                <h2>Logo Design</h2>
                <p>Design creative logos that stand out.</p>
                <button>View Details</button>
            </div>
            <div class="gig-card">
                <img src="https://via.placeholder.com/300x200" alt="Gig Image">
                <h2>SEO Optimization</h2>
                <p>Boost your website's search engine ranking.</p>
                <button>View Details</button>
            </div>
        </section>
    </div>

    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("overlay").classList.add("active");
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("overlay").classList.remove("active");
        }
    </script>
</body>
</html>
