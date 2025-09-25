<?php

    session_start();
    include("connect.php");

    //if user is not logged in
    if(!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }

    //fetch the logged in user details
    $email = $_SESSION['user']; //user email
  

    $sql = "SELECT * FROM users WHERE fullname = '$fullname'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    $name = isset($user["fullname"])? $user['fullname'] : 'Guest';
    echo "Welcome, " . htmlspecialchars($name);

    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is dashboard</h1>
</body>
</html>
