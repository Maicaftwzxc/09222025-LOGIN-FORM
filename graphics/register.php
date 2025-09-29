<?php

    include "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //get form data

        $fullname = mysqli_real_escape_string($conn , $_POST['fullname']);
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);

        //check if email is already in database

        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkEmail);

        if($result->num_rows > 0){
        //email is already in use
            echo "<script>alert('Email has already an account');
                window.location.href = 'index.php'; 
                </script>";
            }  else {

            //CREATE ACCOUNT // SAVE DATA TO DATABASE
            // SECURITY = HASHING

            $hashed_password =  password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users(fullname,email,password) VALUES ('$fullname', '$email', 
            '$hashed_password')";

            if($conn->query($sql) === TRUE) {

                //account created

                echo "<script>alert('Account Created');
                window.location.href = 'index.php'; 
                </script>";

            } else {
                echo "Error" . $sql . $conn->error;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>

        <link rel="icon" type="image/png" href="images/favicon.png">
        <title> LOG IN PAGE</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="bg-[url('https://wallpaper-house.com/data/out/7/wallpaper2you_171699.jpg')] h-screen w-full bg-cover bg-center flex justify-center items-center">
        

        <div class="max-w-[960px] bg-white/20 backdrop-blur-md border border-white/40 p-13 rounded-2xl m-6 flex justify-center items-center">
            <div class="grid gap-5">
                <form action="register.php" method="POST" class="space-y-5"> 
                    <h1 class="flex justify-center items-center text-3xl font-bold">WELCOME</h1>

                
                    <label for="username"><br>Username<br></label> 
                    <input type="text" name="fullname" placeholder="Enter Your Name" minlength="6" maxlength="15" required class="w-80 bg-black/20 py-2 px-2 rounded-xl" required> <br>

                    <label for="email">Email<br></label>
                    <input type="email" name="email" placeholder="Enter Your Email" required class="w-80 bg-black/20 py-2 px-2 rounded-xl" ><br>

                    <label for="password">Password<br></label>
                    <input type="password" name="password" placeholder="Create Password" minlength="6" maxlength="15" required class="w-80 bg-black/20 py-2 px-2 rounded-xl" > <br> <hr>

                    <div class="flex justify-center items-center flex-col space-y-4">
                        <button 
                            type="submit"
                            class="bg-orange-500/80 flex justify-center items-center text-sm font-semibold rounded-2xl p-2 w-50 hover:bg-orange-900 hover:text-white">
                            Create Account
                            </button>

                        <button type="button" 
                            class="bg-orange-500/80 flex justify-center items-center text-sm font-semibold rounded-2xl p-2 w-50 hover:bg-red-900/80 hover:text-white" 
                            onclick="window.location.href='index.php'">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

            
        </div>
    </body>
</html>