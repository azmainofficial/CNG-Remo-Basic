<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href="resources/images/620.png" type="image/png">
        <title>Passengers for Drivers</title>
    </head>
    <body>
        <header class="header">
            <nav-bar>
                <nav-item><a href="driver-profile.php">Profile</a></nav-item>
                <nav-item><a class="active" href="passengers-for-drivers.php">Passengers</a></nav-item>
                <nav-item style="float:right"><button onclick="location.href='index.php'" style="background-color: #f44336">Sign out</button></nav-item>
            </nav-bar>
        </header>
        
        <div class="registration-form">
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
                        
                        if ($row['utype'] == "driver") {
                            echo "<h3>Passengers</h3>";
                            
                            $query = "SELECT u.fname, u.lname, u.phone, p.current_location, p.destination, p.date 
                                      FROM users u 
                                      JOIN passengers p ON u.uid = p.uid";
                            $result = mysqli_query($db, $query);
                            
                            if ($result) {
                                echo '<table style="width: 100%; padding: 5px; border: 1px solid black">';
                                echo '<tr><th style="padding: 5px; border: 1px solid black">First name</th><th style="padding: 5px; border: 1px solid black">Last name</th><th style="padding: 5px; border: 1px solid black">Phone</th><th style="padding: 5px; border: 1px solid black">Current Location</th><th style="padding: 5px; border: 1px solid black">Destination</th><th style="padding: 5px; border: 1px solid black">Date</th></tr>';
                                
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo '<tr><td style="padding: 5px; border: 1px solid black">' . $row['fname'] . '</td><td style="padding: 5px; border: 1px solid black">' . $row['lname'] . '</td><td style="padding: 5px; border: 1px solid black">' . $row['phone'] . '</td><td style="padding: 5px; border: 1px solid black">' . $row['current_location'] . '</td><td style="padding: 5px; border: 1px solid black">' . $row['destination'] . '</td>';
                                    
                                    if ($row['date'] == NULL) {
                                        echo '<td style="padding: 5px; border: 1px solid black">Today (Urgent)</td></tr>';
                                    } else {
                                        echo '<td style="padding: 5px; border: 1px solid black">' . $row['date'] . '</td></tr>';
                                    }
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