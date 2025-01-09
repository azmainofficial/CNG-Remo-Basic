<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href = "resources/images/620.png" type="image/png">
        
        <title>Registration</title>
    </head>
    <body>
        <?php
            session_start();
            require 'db.php';
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $vrn = $_POST['vrn'];
            $birthdate = $_POST['birthdate'];
            $income = $_POST['income'];
            
            // Insert into users table
            $query_1 = "INSERT INTO users (fname, lname, phone, email, password, utype) VALUES(?, ?, ?, ?, ?, 'driver')";
            $stmt_1 = $conn->prepare($query_1);
            $stmt_1->bind_param("sssss", $fname, $lname, $phone, $email, $password);
            $result_1 = $stmt_1->execute();
            
            if ($result_1) {
                // Get the last inserted id
                $uid = $conn->insert_id;
                
                // Insert into drivers table
                $query_2 = "INSERT INTO drivers (uid, vehicle_number, vehicle_type) VALUES(?, ?, ?)";
                $stmt_2 = $conn->prepare($query_2);
                $stmt_2->bind_param("iss", $uid, $vrn, $vehicle_type);
                $result_2 = $stmt_2->execute();
                
                if ($result_2) {
                    $conn->close();
                    
                    $_SESSION["uid"] = $uid;
                    
                    header("Location: driver-profile.php");
                } else {
                    echo "Error: " . $stmt_2->error;
                }
            } else {
                echo "Error: " . $stmt_1->error;
            }
        ?>
    </body>
</html>