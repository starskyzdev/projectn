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
    <title>Verification | Neverleave</title>
</head>

<body>

    <?php
    ob_start();
    session_start();
    ?>
    <div class="container">
        <div class="center">

            <?php
            $msg = "";
            if (isset($_POST['form_submitted_login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                if ($_POST['username'] == 'username' && $_POST['password'] == '123') {
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = 'myname';
                    echo "You have entered valid username and password";
                    echo "<br>";
                    echo "<br>";
                    echo "Welcome " .  $_SESSION['username'] . ".";
                    echo "<br>";
                    echo '<p>user verified, redirecting to the main site </p>';
                    header("refresh: 2; URL = main.php");
                } else if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = 'admin';
                    echo "Welcome admin";
                    echo '<p>admin verified, redirecting to the main site </p>';
                    header("refresh: 2; URL = quotes_stack.php");
                } else {
                    $msg = "Wrong username and password";
                    echo $msg;
                    unset($_SESSION["username"]);
                    unset($_SESSION["password"]);
                    header("refresh: 2; URL = index.php");
                }
            }
            ?>

        </div>
    </div>
</body>

</html>