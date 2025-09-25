

<!DOCTYPE html>
<html>
    <head>

        <link rel="icon" type="image/png" href="images/favicon.png">
        <title> LOG IN PAGE</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="bg-[url('https://wallpaper-house.com/data/out/7/wallpaper2you_171699.jpg')] h-screen w-full bg-cover bg-center flex flex justify-center items-center ">
        

            <div class="max-w-[960px] bg-white/80  p-13 rounded-2xl m-6 flex justify-center items-center">
                <div class="grid gap-5">
                    <form action="login.php" method="POST" class="space-y-5"> 
                        <h1 class="flex justify-center items-center text-3xl font-bold">WELCOME</h1>

                    
                        <label for="Email"><br>Email<br></label> 
                        <input type="text" name="email" placeholder="Enter Your Email"  required class="w-80 bg-black/20 py-2 px-2 rounded-xl" required> <br>

                        <label for="password">Password<br></label>
                        <input type="password" name="password" placeholder="Enter Your Password" minlength="6" maxlength="15" required class="w-80 bg-black/20 py-2 px-2 rounded-xl" > <br> <hr>

                        <div class="flex justify-center">
                        <button 
                            type="submit"
                            class="bg-orange-500/80 flex justify-center items-center text-sm font-semibold rounded-2xl p-2 w-50">
                            Log in
                        </button>
                        </div>
                    </form>

                    <div class="flex justify-center cursor-pointer">
                        <p>Don't have an account? <a class="font-bold hover:underline" href="register.php">Register</a></p>
                    </div>
                </div>
            </div>
    </body>
</html>

