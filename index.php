<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Shojumaru&display=swap');
    </style>
    <title>Neverleave</title>
</head>

<body>

    <style>

    </style>

    <div class="container">
        <div class="center">
            <h2>Welcome to <a style="color: #FF3D00; font-family: Shojumaru;">Neverleave</a> without a Message</h2>

            <form name="login" action="logged.php" method="post">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required auto><br>

                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>
                <input type="checkbox" checked="checked" name="remember"> By Log in or Sign Up, You’re obligated to
                leave a
                message everytime YOU use this service
                </label><br>
                <div style="float: right;">
                    <input type="hidden" name="form_submitted_login" value="1">
                    <input type="submit" value="Login">
                    <button type="submit" class="signupbtn">Sign Up</button>

                </div>

                <label>
            </form>
        </div>
    </div>


</body>

</html>

</html>