<?php

    session_start();
    include("connect.php");

    //if user is not logged in
    if(!isset($_SESSION['user'])) {
        header("Location: index.php");
    }

    //fetch the logged in user details
    $email = $SESSION['user']; //user email
  

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    $user = $sresult->fetch_assoc();

    $name = $user["fullname"];
    echo "$name";

    $conn->close();

?>