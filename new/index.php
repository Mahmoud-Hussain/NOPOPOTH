<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobopoth - Discover Your Needs</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <a href="#testimonials" class="nav-link">Testimonials</a>
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
            <div class="steps">
                <div class="step">
                    <h3>Step 1</h3>
                    <p>Describe your project and get proposals from freelancers.</p>
                </div>
                <div class="step">
                    <h3>Step 2</h3>
                    <p>Choose the best freelancer for your project.</p>
                </div>
                <div class="step">
                    <h3>Step 3</h3>
                    <p>Collaborate and get your project done.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>What Our Users Say</h2>
            <div class="testimonial-list">
                <div class="testimonial-item">
                    <p>"Nobopoth helped me find the perfect freelancer for my project. Highly recommend!"</p>
                    <span>- User A</span>
                </div>
                <div class="testimonial-item">
                    <p>"Great platform with a lot of talented freelancers."</p>
                    <span>- User B</span>
                </div>
                <div class="testimonial-item">
                    <p>"Easy to use and very efficient."</p>
                    <span>- User C</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>