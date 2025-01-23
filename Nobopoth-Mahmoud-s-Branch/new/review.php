<?php
session_start();
include('db_connect.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

// Fetch job title
$sql_sess = "SELECT jt.job_title, jt.job_id FROM jobs_tb jt JOIN drop_job dj ON jt.job_id = dj.j_id WHERE dj.u_id = ?";
$stmt_sess = $conn->prepare($sql_sess);
$stmt_sess->bind_param('i', $_SESSION['user_id']);
$stmt_sess->execute();
$result_sess = $stmt_sess->get_result();
$row_sess = $result_sess->fetch_assoc();

if (!$row_sess) {
    die("No job found for the user.");
}

$jobTitle = $row_sess['job_title'];
$jobId = $row_sess['job_id'];

if (isset($_POST['submit'])) {
    if ($jobTitle === $_POST['job_title']) {
        $reviewerId = $_SESSION['user_id'];
        $revieweeName = $_POST['first_name'];

        // Fetch reviewee ID
        $R_sql = "SELECT ut.user_id FROM user_tb ut JOIN take_job tj ON tj.j_id = ? WHERE ut.first_name = ?";
        $stmt = $conn->prepare($R_sql);
        $stmt->bind_param('is', $jobId, $revieweeName);
        $stmt->execute();
        $result = $stmt->get_result();
        $R_sql = $result->fetch_assoc();

        if (!$R_sql) {
            die("Reviewee not found.");
        }

        $revieweeId = $R_sql['user_id'];
        $rating = $_POST['rating'];
        $feedback = $_POST['feedback'];

        // Insert review
        $sql = "INSERT INTO review_tb (reviewer_id, reviewee_id, j_id, rating, feedback) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iiids', $reviewerId, $revieweeId, $jobId, $rating, $feedback);
        if ($stmt->execute()) {
            echo "Review submitted successfully";
            if ($_SESSION['user_type'] == 'student') {
                header("Location: student.php");
                exit();
            } elseif ($_SESSION['user_type'] == 'employer') {
                header("Location: employer.php");
                exit();
            } elseif ($_SESSION['user_type'] == 'admin') {
                header("Location: admin.php");
                exit();
            }
        } else {
            echo "Failed to submit review.";
        }
    } else {
        echo "Job title does not match.";
    }
}
?>