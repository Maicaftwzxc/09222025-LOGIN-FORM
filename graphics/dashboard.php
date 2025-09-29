<?php

   session_start();
include("connect.php");

// if user is not logged in
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// fetch the logged in user details
$email = $_SESSION['user']; ; // user email

$sql = "SELECT * FROM users WHERE email = '$email'"; // Correct column to match email
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$name = $user["fullname"];
$ouremail = $user["email"];


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
  <div class="max-w-[960px] bg-white/80 p-20 rounded-2xl m-6 grid grid-cols-2 gap-20 relative">

    <!--logout-->        
    <form action="logout.php" method="post" class="absolute top-4 right-4 py-2 px-6">
      <button type="submit" class="bg-orange-500/80 text-black px-4 py-2 rounded hover:bg-orange-900 hover:text-white font-semibold">Log Out</button>           
    </form>

    <div class="flex flex-col items-center space-y-4">
      <h2 class="text-sm font-semibold mb-10 text-orange-900">Welcome, <?php echo htmlspecialchars($name); ?>✨</h2>

      <!--profile picture-->
      <div class="w-64 h-48 object-cover flex items-center justify-center p-5">
        <img src="https://tse3.mm.bing.net/th/id/OIP.0BcldBSJNX98Vu6rNzWzngHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="profile picture">
      </div>
    </div>

    <!--user details-->
    <div class="flex flex-col justify-center gap-5">
      <h1 class="text-5xl font-bold">Your Profile</h1>
      <p>Email: <?php echo htmlspecialchars($email); ?></p>
      <p>Member Since: January 2023</p>
    </div>

  </div>
</body>
</html>