<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href="resources/images/620.png" type="image/png">
        <title>Booking</title>
    </head>
    <body>
        <?php
			session_start();
			
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $db_name = "cngms";
            
            $db = mysqli_connect($hostname, $username, $password, $db_name);
            
            if ($db) {
                $uid = $_SESSION['uid'];
                
                // Check if the user exists in the users table
                $query_check_user = "SELECT uid FROM users WHERE uid = ?";
                $stmt_check_user = $db->prepare($query_check_user);
                $stmt_check_user->bind_param("i", $uid);
                $stmt_check_user->execute();
                $result_check_user = $stmt_check_user->get_result();
                
                if ($result_check_user->num_rows > 0) {
                    $current_location = $_POST['current_location'];
                    $destination = $_POST['destination'];
                    $date = $_POST['date'];
                    
                    $query_1 = "INSERT INTO passengers (uid, current_location, destination, date) VALUES(?, ?, ?, ?)";
                    $stmt_1 = $db->prepare($query_1);
                    $stmt_1->bind_param("isss", $uid, $current_location, $destination, $date);
                    $result_1 = $stmt_1->execute();
                    
                    if ($result_1) {
                        $db->close();
                        header("Location: my-bookings.php");
                    } else {
                        echo "Error: " . $stmt_1->error;
                    }
                } else {
                    echo "Error: User does not exist.";
                }
            } else {
                echo "Error: " . mysqli_connect_error();
            }
        ?>
    </body>
</html>