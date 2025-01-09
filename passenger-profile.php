<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
        
        <title>Profile</title>
    </head>
    <body>
        <header class="header">
            <nav-bar>
                <nav-item><a class="active" href="passenger-profile.php">Profile</a></nav-item>
                <nav-item><a href="my-bookings.php">Bookings</a></nav-item>
                <nav-item style="float:right"><button onclick="location.href='index.php'" style="margin: 5px 5px 5px 0px;background-color: #f44336">Sign out</button></nav-item>
                <nav-item style="float:right"><button onclick="document.getElementById('modal-scheduled-booking').style.display='block'" style="margin: 5px 5px 5px 0px">Scheduled booking</button></nav-item>
                <nav-item style="float:right"><button onclick="document.getElementById('modal-urgent-booking').style.display='block'" style="background-color: #00d245">Urgent booking</button></nav-item>
            </nav-bar>
        </header>
        
        <div id="modal-urgent-booking" class="modal">
            <form id="urgent-booking-form" name="urgent-booking-form" class="modal-content animate" action="urgent-booking.php" method="post" style="margin-top: 125px;height: 230px">
                <div style="padding: 16px">
                    <label>Current location</label>
                    <input type="text" placeholder="Enter your current location" name="current_location" required>
                    <label>Destination</label>
                    <input type="text" placeholder="Enter your destination" name="destination" required>
                    <button type="submit" form="urgent-booking-form">Proceed</button>
                    <button type="button" onclick="document.getElementById('modal-urgent-booking').style.display='none'" style="background-color: #f44336">Cancel</button>
                </div>
            </form>
        </div>
        
        <div id="modal-scheduled-booking" class="modal">
            <form id="scheduled-booking-form" name="scheduled-booking-form" class="modal-content animate" action="scheduled-booking.php" method="post" style="margin-top: 125px;height: 300px">
                <div style="padding: 16px">
                    <label>Current location</label>
                    <input type="text" placeholder="Enter your current location" name="current_location" required>
                    <label>Destination</label>
                    <input type="text" placeholder="Enter your destination" name="destination" required>
                    <label>Date</label>
                    <input type="date" name="date" required>
                    <button type="submit" form="scheduled-booking-form">Proceed</button>
                    <button type="button" onclick="document.getElementById('modal-scheduled-booking').style.display='none'" style="background-color: #f44336">Cancel</button>
                </div>
            </form>
        </div>
        
        <!-- Passenger PROFILE -->
        
        <div class="registration-form">
            <?php
                session_start();
                require 'db.php';
                
                $uid = $_SESSION["uid"];
                
                $query = "SELECT * FROM users WHERE uid = ? AND utype = 'passenger'";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $uid);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result) {
                    while ($row = $result->fetch_assoc()){
                        ?>
                            <h2><?php echo $row['fname'] . "'s profile (Passenger)"; ?></h2>
                            
                            <form id="passenger-profile-form" name="passenger-profile-form" action="passenger-profile.php" method="get">
                                <label>First name</label>
                                <input type="text" placeholder="Enter your first name" name="fname" value="<?php echo $row['fname']; ?>" readonly>

                                <label>Last name</label>
                                <input type="text" placeholder="Enter your last name" name="lname" value="<?php echo $row['lname']; ?>" readonly>
                                
                                <label>Email</label>
                                <input type="text" placeholder="Enter your email" name="email" value="<?php echo $row['email']; ?>" readonly>
                                
                                <label>NID number</label>
                                <input type="text" placeholder="Enter your national id number" value="<?php echo $row['uid']; ?>" name="nid" readonly>
                                
                                <label>Password</label>
                                <input type="text" placeholder="Enter a password" name="password" value="<?php echo $row['password']; ?>" readonly>
                                
                                <label>Phone number</label>
                                <input type="text" placeholder="Enter your phone number" name="phone" value="<?php echo $row['phone']; ?>" readonly>
                                
                                <label>Gender</label>
                                <input type="text" placeholder="Enter your gender" name="gender" value="<?php echo $row['gender']; ?>" readonly>
                            </form>
                        <?php
                    }
                    
                    $conn->close();
                } else {
                    echo $conn->error;
                }
            ?>
        </div>
        
        <footer style="top: 700px">
            <a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/fb.png" height="50px"></a>
            <a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/tweet.png" height="50px"></a>
            <a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/u.png" height="50px"></a>
            
            <center>CSE311.5 © SUMMER2017 </center>
        </footer>
    </body>
</html>