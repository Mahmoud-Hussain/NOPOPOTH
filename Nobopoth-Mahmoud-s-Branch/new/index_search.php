<?php
session_start();
include("db_connect.php");
if($_SESSION["category_id"] === 1){
    $sql = "SELECT * FROM jobs_tb WHERE category_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION["category_id"]);
        $stmt->execute();
        $jobs = $stmt->get_result();
        if($jobs->num_rows > 0)
        {
            while($row = $jobs->fetch_assoc())
            {
                echo "<div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['job_title']."</h5>"
                    . "<form method='post' action='' style='display: inline;'>"
                    . "<input type='hidden' name='id' value='" . $row['job_id'] . "'>"
                    . "<input type='submit' name='apply' value='apply'>"
                    . "</form>";
            }
        }
if(isset($_POST['apply']))
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
    }
    else{
        $job_id = $_POST['id'];
        $apply_status = "pending";
        $apply_date = "";
        $sql = "INSERT INTO take_job (j_id, u_id, apply_status, apply_date, approve_date) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $job_id, $_SESSION['user_id'], $apply_status, $apply_date, $approve_date);
        $stmt->execute();
        if($stmt->affected_rows > 0)
        {
           echo "Applied successfully";
        }
     else
      {
         echo "Failed to apply";
      }
    }
    
 }
}
elseif($_SESSION["category_id"] === 2){
    $sql = "SELECT * FROM jobs_tb WHERE category_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION["category_id"]);
        $stmt->execute();
        $jobs = $stmt->get_result();
        if($jobs->num_rows > 0)
        {
            while($row = $jobs->fetch_assoc())
            {
                echo "<div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['job_title']."</h5>"
                    . "<form method='post' action='' style='display: inline;'>"
                    . "<input type='hidden' name='id' value='" . $row['job_id'] . "'>"
                    . "<input type='submit' name='apply' value='apply'>"
                    . "</form>";
        }
}
if(isset($_POST['apply']))
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
    }
    else{
        $job_id = $_POST['id'];
        $apply_status = "pending";
        $apply_date = date("Y-m-d");
        $approve_date = "0000-00-00";
        $sql = "INSERT INTO take_job (j_id, u_id, apply_status, apply_date, approve_date) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $job_id, $_SESSION['user_id'], $apply_status, $apply_date, $approve_date);
        $stmt->execute();
        if($stmt->affected_rows > 0)
        {
           echo "Applied successfully";
        }
    else
    {
        echo "Failed to apply";
    }
    }
    
}
}
elseif($_SESSION["category_id"] === 3){
    $sql = "SELECT * FROM jobs_tb WHERE category_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION["category_id"]);
        $stmt->execute();
        $jobs = $stmt->get_result();
        if($jobs->num_rows > 0)
        {
            while($row = $jobs->fetch_assoc())
            {
                echo "<div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['job_title']."</h5>"
                    . "<form method='post' action='' style='display: inline;'>"
                    . "<input type='hidden' name='id' value='" . $row['job_id'] . "'>"
                    . "<input type='submit' name='apply' value='apply'>"
                    . "</form>";
        }
}
if(isset($_POST['apply']))
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
    }
    else{
        $job_id = $_POST['id'];
        $apply_status = "pending";
        $apply_date = date("Y-m-d");
        $approve_date = "0000-00-00";
        $sql = "INSERT INTO take_job (j_id, u_id, apply_status, apply_date, approve_date) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $job_id, $_SESSION['user_id'], $apply_status, $apply_date, $approve_date);
        $stmt->execute();
        if($stmt->affected_rows > 0)
        {
           echo "Applied successfully";
        }
    else
    {
        echo "Failed to apply";
    }
    }
    
}
}
elseif($_SESSION["category_id"] === 4){
    $sql = "SELECT * FROM jobs_tb WHERE category_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION["category_id"]);
        $stmt->execute();
        $jobs = $stmt->get_result();
        if($jobs->num_rows > 0)
        {
            while($row = $jobs->fetch_assoc())
            {
                echo "<div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['job_title']."</h5>"
                    . "<form method='post' action='' style='display: inline;'>"
                    . "<input type='hidden' name='id' value='" . $row['job_id'] . "'>"
                    . "<input type='submit' name='apply' value='apply'>"
                    . "</form>";
        }
}
if(isset($_POST['apply']))
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
    }
    else{
        $job_id = $_POST['id'];
        $apply_status = "pending";
        $apply_date = date("Y-m-d");
        $approve_date = "0000-00-00";
        $sql = "INSERT INTO take_job (j_id, u_id, apply_status, apply_date, approve_date) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $job_id, $_SESSION['user_id'], $apply_status, $apply_date, $approve_date);
        $stmt->execute();
        if($stmt->affected_rows > 0)
        {
           echo "Applied successfully";
        }
    else
    {
        echo "Failed to apply";
    }
    }
    
}
}
elseif($_SESSION["category_id"] === 5){
    $sql = "SELECT * FROM jobs_tb WHERE category_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$_SESSION["category_id"]);
        $stmt->execute();
        $jobs = $stmt->get_result();
        if($jobs->num_rows > 0)
        {
            while($row = $jobs->fetch_assoc())
            {
                echo "<div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row['job_title']."</h5>"
                    . "<form method='post' action='' style='display: inline;'>"
                    . "<input type='hidden' name='id' value='" . $row['job_id'] . "'>"
                    . "<input type='submit' name='apply' value='apply'>"
                    . "</form>";
        }
}
if(isset($_POST['apply']))
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
    }
    else{
        $job_id = $_POST['id'];
        $apply_status = "pending";
        $apply_date = date("Y-m-d");
        $approve_date = "0000-00-00";
        $sql = "INSERT INTO take_job (j_id, u_id, apply_status, apply_date, approve_date) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $job_id, $_SESSION['user_id'], $apply_status, $apply_date, $approve_date);
        $stmt->execute();
        if($stmt->affected_rows > 0)
        {
           echo "Applied successfully";
        }
    else
    {
        echo "Failed to apply";
    }
    }
    
}
}
else{
    echo "No category selected";
}
?>
