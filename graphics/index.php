<!DOCTYPE html>
<html>
    <head>

        <link rel="icon" type="image/png" href="images/favicon.png">
        <title> LOG IN PAGE</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1> WELCOME TO LOG-IN PAGE</h1> 

        <div class="container">
            <div id="form">

                <form action="login.php" method="POST"> 
                <label for="username">Username:</label> 
                <input type="text" name="fullname" placeholder="Enter Your Name" minlength="6" maxlength="15" required> <br>

                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter Your Email" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Create Password" minlength="6" maxlength="15" required> <br> <hr>

                <button type="submit">Register</button>
            </div>
        </div>
    </body>


</html>