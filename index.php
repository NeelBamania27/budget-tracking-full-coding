<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta name="view-transition" content="same-origin">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="m1">
        <div class="n1">
            <div class="e2">
                <h1 class="h1">sign up</h1>
            </div>
        <div class="d1">
        <main class="content">
        <form action="body.php" method="POST">
           User name :<input type="text" placeholder="enter your name" name="username1"><br>
           Email :    <input type="email" placeholder="enter email" required><br>
           Password : <input type="password" placeholder="enter password" maxlength="10" required><br>
           Birthdate :<input type="date" placeholder="enter date of birth" required><br>
           <input type="submit" value="  Sign up  " class="n2"> <input type="checkbox">remember me <br>
           <p>If already signed up , then <a class="l1" href="login.php">login</a></p>
        </form>
        </main>
        </div>
        </div>
        </div>
    </body>
</html>