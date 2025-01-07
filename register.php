<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type']; 
    $university_domain = "@uiu.ac.bd"; 
    $error = "";

    
    if ($type == "student") {
        
        if (!str_ends_with($email, $university_domain)) {
            $error = "Students must use a university email address.";
        }
    } elseif ($type == "admin") {
       
        $query = "SELECT * FROM users WHERE type = 'admin' AND email LIKE ?";
        $domain_check = "%" . explode("@", $email)[1]; 
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $domain_check);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "This university already has an admin.";
        }
        $stmt->close();
    }

    if (empty($error)) {
       
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        $query = "INSERT INTO users (name, email, password, type) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $type);

        if ($stmt->execute()) {
            
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['user_type'] = $type;

            if ($type == "student") {
                header("Location: student_dashboard.php");
            } elseif ($type == "admin") {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: employer_dashboard.php");
            }
            exit();
        } else {
            $error = "Registration failed. Please try again.";
        }
        $stmt->close();
    }
    $conn->close();
}