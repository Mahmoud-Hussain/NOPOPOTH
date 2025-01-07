<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Nobopoth</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <!-- Logo Section -->
    <div class="logo-section">
        <img src="newlogo-01.png" alt="Nobopoth Logo">
    </div>

    <!-- Sign-Up Form -->
    <div class="signup-container">
        <div class="signup-box">
            <h1>Create an Account</h1>
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" placeholder="Enter last name" required>
                    </div>
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
    </div>
</body>
</html>