<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Nobopoth</title>
    <link rel="stylesheet" href="signin.css">
    <link href="https:fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="Icon" href="image/logo.png" type="image/x-icon">
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
            </nav>
        </div>
    </header>

    <!-- Sign-In Form -->
    <div class="signin-container">
        <div class="signin-box">
            <h1>Sign In</h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" name="login" class="btn"><a href="student.php">Log In</a></button>
            </form>
            <div class="signup-link">
                Don't have an account? <a href="signup.php">Sign up here</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
//LOGIN
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
    if(isset($_POST["login"])){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = $_POST['password']; 

        $sql = "SELECT * FROM user_tb WHERE e_mail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
         
        if ($result->num_rows === 1) {
           $user = $result->fetch_assoc();

              echo $user["user_id"]."<br";
              echo $user["first_name"]."<br>";
              echo $user["e_mail"]."<br>";
              echo $user["user_type"]."<br>";
              echo $user["u_password"]."<br>";

        if (password_verify($password, $user['u_password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_type'] = $user['user_type'];

            switch ($user['user_type']) {
                case 'student':
                    header("Location: student.php");
                    break;
                case 'admin':
                    header("Location: admin.php");
                    break;
                case 'employer':
                    header("Location: employer.php");
                    break;
                default:
                    echo "Unknown user type.";
            }
            exit();
        } else {
            echo "Invalid password.";
        }
     }  else {
         echo "No user found with this email.";
    }
    }
    
    //Update Password
    if(isset($_POST["update-password"]))
    {
          //insert an html and css here
          $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
          $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
          $sql = "SELECT * FROM user_tb WHERE e_mail = ? AND username = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $email, $username);
          $stmt->execute();
          $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $new_pass= filter_input(INPUT_POST, "new_password", FILTER_SANITIZE_SPECIAL_CHARS);
            $confirm_pass= filter_input(INPUT_POST, "confirm_password", FILTER_SANITIZE_SPECIAL_CHARS);
            if ($new_pass !== $confirm_pass) {
                echo "Passwords do not match. Please try again.";
                exit;
               }
            else{
                $hashedpassword = password_hash($new_pass, PASSWORD_DEFAULT);
                $sql = "UPDATE user_tb SET u_password=? WHERE e_mail=? AND username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sss',$hashedpassword, $email, $username);
           
                if ($stmt->execute()) {
                    echo"Update successful";


                    $_SESSION['user_id'] = $stmt->insert_id;
                    $_SESSION['user_type'] = $type;

                 if ($type === "student") {
                    header("Location: student.php");
                 } elseif ($type === "admin") {
                    header("Location: admin.php");
                 } else {
                    header("Location: employer.php");
                 }
              exit();
            } else {
                  echo"Update failed. Please try again.";
              }
          $stmt->close();
         }
        }
       }
      
$stmt->close();
$conn->close();
    }
?>