<?php
    session_start();
    require 'db.php';
    
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['nid']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['gender'])) {
        $uid = $_POST['nid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        
        $query = "INSERT INTO users (uid, fname, lname, phone, email, password, utype) VALUES(?, ?, ?, ?, ?, ?, 'passenger')";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("isssss", $uid, $fname, $lname, $phone, $email, $password);
        $result = $stmt->execute();
        
        if ($result) {
            $_SESSION["uid"] = $uid;
            header("Location: passenger-profile.php");
        } else {
            echo $conn->error;
        }
    } else {
        echo "Please fill in all required fields.";
    }
?>