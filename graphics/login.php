<?php

    include "connect.php";

    //LOGIN USERS HERE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //get form data
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);

        //fetch database

        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = $conn->query(query: $sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            //check if password is correct

        } else {
            //email doesnt exist
            echo "NO USER WITH THAT EMAIL";

        }

    }
?>