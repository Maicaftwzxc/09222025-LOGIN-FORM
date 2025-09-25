<?php

   session_start();
include("connect.php");

// if user is not logged in
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// fetch the logged in user details
$email = $_SESSION['user']['email'];
; // user email

$sql = "SELECT * FROM users WHERE email = '$email'"; // Correct column to match email
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$name = isset($user["fullname"]) ? $user["fullname"] : 'Guest';
echo "Welcome, " . htmlspecialchars($name);

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[url('https://wallpaper-house.com/data/out/7/wallpaper2you_171699.jpg')] h-screen w-full bg-cover bg-center flex justify-center items-center ">
    <div class="max-w-[960px] bg-white/80  p-20 rounded-2xl m-6 flex justify-center items-center grid grid-cols-2 gap-20">
        
       

        <!--profile picture-->
        <div class="w-64 h-48 object-cover flex items-center justify-center p-5">
            <img src="https://tse3.mm.bing.net/th/id/OIP.0BcldBSJNX98Vu6rNzWzngHaHa?rs=1&pid=ImgDetMain&o=7&rm=3"  alt="profile picture">
        </div>

         <!--user details-->
        <div class="grid gap-5">
            <h1 class="text-5xl font-bold">Your Profile</h1>
            <p>Email: </p> 
            <p>Member Since: January 2023</p>
        </div>


    </div>
</body>
</html>