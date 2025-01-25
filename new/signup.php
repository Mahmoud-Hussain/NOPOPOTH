<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Nobopoth</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
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
            <!-- Hamburger Menu Icon -->
            <div class="menu-icon" onclick="toggleNav()">&#9776;</div>
            <nav class="nav" id="nav">
                <a href="index.php" class="nav-link">Home</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Sign-Up Form and Image Container -->
        <div class="signup-container">
            <div class="signup-box">
                <h1>Create an Account</h1>
                <p>Join Nobopoth to discover the best services for your needs.</p>
                <form>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Type</label>
                        <select id="role" required>
                            <option value="">Select your type</option>
                            <option value="admin">Admin</option>
                            <option value="employer">Employer</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Create a password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" placeholder="Confirm your password" required>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
                <div class="signin-link">
                    Already have an account? <a href="signin.php">Sign in here</a>
                </div>
            </div>
            <!-- Right Aligned Image -->
            <div class="signup-image-container">
                <img src="image/signup.jpg" alt="Sign Up Image" class="signup-image">
            </div>
        </div>
    </div>

    <!-- JavaScript for Hamburger Menu -->
    <script>
        function toggleNav() {
            const nav = document.getElementById('nav');
            nav.classList.toggle('active');
        }
    </script>
</body>
</html>