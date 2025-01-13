<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobopoth - Discover Your Needs</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Nobopoth Logo">
                <span>Nobopoth</span>
            </div>
            <nav class="nav">
                <a href="#" class="nav-link">Home</a>
                <a href="#categories" class="nav-link">Categories</a>
                <a href="#how-it-works" class="nav-link">How It Works</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a href="signin.php" class="nav-link">Sign In</a>
                <a href="signup.php" class="nav-link">Sign Up</a>
            </nav>
        </div>
    </header>
    

    <section class="hero">
        <div class="container">
            <h1>Find the Perfect Service for Your Needs</h1>
            <form class="search-bar" action="search.php" method="GET">
                <input type="text" name="query" placeholder="What service are you looking for?" />
                <button type="submit">Search</button>
            </form>
        </div>
    </section>

    <section id="categories" class="categories">
        <div class="container">
            <h2>Explore Categories</h2>
            <div class="category-list">
                <div class="category-item">Web Development</div>
                <div class="category-item">Graphic Design</div>
                <div class="category-item">Digital Marketing</div>
                <div class="category-item">Writing & Translation</div>
                <div class="category-item">Video & Animation</div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <ol>
                <li>Search for the service you need.</li>
                <li>Connect with skilled professionals.</li>
                <li>Complete your project with ease.</li>
            </ol>
        </div>
    </section>

    <footer id="contact" class="footer">
        <div class="container">
            <p>&copy; 2024 Nobopoth. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
