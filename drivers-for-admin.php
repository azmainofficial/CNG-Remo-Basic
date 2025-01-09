<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href = "resources/images/620.png" type="image/png">
        
        <title>Drivers</title>
    </head>
    <body>
        <header class="header">
            <nav-bar>
                <nav-item><a href="admin-profile.php">Profile</a></nav-item>
                <nav-item><a class="active" href="drivers-for-admin.php">Drivers</a></nav-item>
                <nav-item><a href="passengers-for-admin.php">Passengers</a></nav-item>
                <nav-item style="float:right"><button onclick="location.href='index.php'" style="background-color: #f44336">Sign out</button></nav-item>
            </nav-bar>
        </header>
        
        <!-- DRIVER PROFILE FOR ADMIN -->
        
        <div class="registration-form" style="">
            <?php
                session_start();
                
				$hostname = "localhost";
				$username = "root";
                $password = "";
                $db_name = "cngms";
                
                $db = mysqli_connect($hostname, $username, $password, $db_name);
                
                if ($db) {
                    $uid = $_SESSION["uid"];
                    
                    $query = "SELECT utype FROM users WHERE uid = '$uid'";
                    $result = mysqli_query($db, $query);
                    
                    if ($result) {
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        
                        if ($row['utype'] == "admin") {
                            echo "<h3>Drivers</h3>";
                            
                            $query = "SELECT u.fname, u.lname, u.phone, d.vehicle_number, d.vehicle_type FROM users u JOIN drivers d ON u.uid = d.uid";
                            $result = mysqli_query($db, $query);
                            
                            if ($result) {
                                echo '<table style="width: 100%;padding: 5px;border: 1px solid black">';
                                echo '<tr><th style="padding: 5px;border: 1px solid black">First name</th><th style="padding: 5px;border: 1px solid black">Last name</th><th style="padding: 5px;border: 1px solid black">Phone</th><th style="padding: 5px;border: 1px solid black">Vehicle Number</th><th style="padding: 5px;border: 1px solid black">Vehicle Type</th></tr>';
                                
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo '<tr><td style="padding: 5px;border: 1px solid black">' . $row['fname'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['lname'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['phone'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['vehicle_number'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['vehicle_type'] . '</td></tr>';
                                }
                                
                                echo '</table>';
                            } else {
                                echo "Error: " . mysqli_error($db);
                            }
                        }
                    } else {
                        echo "Error: " . mysqli_error($db);
                    }
                } else {
                    echo "Error: " . mysqli_error($db);
                }
            ?>
        </div>
    </body>
</html>