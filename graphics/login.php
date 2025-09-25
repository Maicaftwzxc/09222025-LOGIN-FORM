<?php
session_start();

    include "connect.php";

    //LOGIN USERS HERE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //get form data
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);

        //fetch database

        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            //check if password is correct

            if(password_verify($password, $user['password'])) {
                //echo"Login successful, Welcome", $user['fullname'];//

                //set session//
                 $_SESSION['user'] = $user;

                //$_SESSION['user'] = $user['email'];//

                //refirect to dashboard
                header("Location:dashboard.php");
                exit();
            }

            else {
                echo "<script>alert('Wrong Password');
                window.location.href = 'index.php'; 
                </script>";
            }

        } else {
            //email doesnt exist
            echo "<script>alert('No user with that email');
                window.location.href = 'index.php'; 
                </script>";

        }

    }
?>

