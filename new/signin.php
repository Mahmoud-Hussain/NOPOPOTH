<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Nobopoth</title>
    <link rel="stylesheet" href="signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <div>
                    <img src="image/logo.png" alt="Nobopoth Logo">
                    <span>Nobopoth</span>
                </div>
                
            </div>
            <nav class="nav">
                <a href="#" class="nav-link">Home</a>
            </nav>
        </div>
    </header>

    <!-- Sign-In Form -->
    <div class="signin-container">
        <div class="signin-box">
            <h1>Sign In</h1>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn"><a href="Student.php">Log In</a></button>
            </form>
            <div class="signup-link">
                Don't have an account? <a href="signup.php">Sign up here</a>
            </div>
        </div>
    </div>
</body>
</html>
