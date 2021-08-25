<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Shojumaru&display=swap');
    </style>
    <title>Home | Neverleave</title>
</head>

<body>

    <div class="container">
        <div class="center">
            <?php
            session_start();
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);

            echo "You have cleaned session";
            header("refresh: 2; URL = index.php");
            ?>
        </div>
    </div>
</body>

</html>