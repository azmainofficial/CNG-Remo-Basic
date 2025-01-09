<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link rel="icon" href = "resources/images/620.png" type="image/png">
        
        <title>Login</title>
    </head>
    <body>
        <?php
            session_start();
            require 'db.php';

            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;

            if ($email !== null && $password !== null) {
                $query = "SELECT uid, utype FROM users WHERE email = ? and password = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ss", $email, $password);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result) {
                    $row = $result->fetch_assoc();

                    if ($row !== null && isset($row['uid']) && isset($row['utype'])) {
                        $_SESSION['uid'] = $row['uid'];

                        if ($row['utype'] == "driver") {
                            header("Location: driver-profile.php");
                        } else if ($row['utype'] == "passenger") {
                            header("Location: passenger-profile.php");
                        } else if ($row['utype'] == "admin") {
                            header("Location: admin-profile.php");
                        }
                    } else {
                        echo "Invalid email or password";
                    }
                } else {
                    echo $conn->error;
                }

                $conn->close();
            } else {
                echo "Email and password are required";
            }
        ?>
    </body>
</html>