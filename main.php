<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NEVERLEAVE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Shojumaru&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Roboto&family=Shojumaru&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
    </style>
</head>

<body style="background-color: #85A3B2;">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FDC1C5;">
        <div class="container">
            <a class="navbar-brand" style="font-family: 'Shojumaru', cursive; color: #FF3D00;"
                href="main.php">NEVERLEAVE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-family: 'Indie Flower', cursive;">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="main.php">Your
                            Quotes Of TheDay</a></li>
                    <li class="nav-item"><a class="nav-link " href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <?php echo '<li class="nav-item"><a class="nav-link" href="logout.php" style="color: #FF3D00;">Log Out</a></p>'; ?>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <br>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">

                </div>
                <div class="col-md-8" style="font-family:'Indie Flower', cursive;">
                    <h2 style="color: #FFDA03;">Take it or Leave it</h2>
                    <br>
                    <div class="card mx-auto card w-200" style="background-color: #FFE3C9;">

                        <div class="card-body ">
                            <blockquote class="blockquote mb-lg-5" "><br>
                            <p class=" fs-3 text-center" style="font-family: 'Ribeye Marrow', cursive;">Never Gonna
                                Give You Up!</p>
                                <br>
                                <footer class="blockquote-footer text-center">Rick Astley<cite title="Source Title"
                                        style="font-family: 'Ribeye Marrow', cursive;">
                                        Evergreen Meme</cite></footer>
                            </blockquote>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col"></div>
            </div>

            <div class="row align-items-center">
                <div class="col">

                </div>
                <div class="col-md-8">
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="fs-4 form-label"
                            style="font-family: 'Indie Flower', cursive; color: #FFDA03;">Let's hEar your miNd
                            blOwn IdEa shall wE
                            ?</label>
                        <textarea class="form-control" id="userQuote" rows="7" style="background-color: #FFE3C9;"
                            placeholder="Some Fries will never let you down...."></textarea>
                        <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-secondary"
                                style="color: rgb(255, 208, 239); font-family: 'Indie Flower', cursive;" type="button"
                                onclick="document.getElementById('userQuote').value = ''">Clear</button>
                            <input class="btn btn-light " style="color: #0bcfa5; font-family: 'Indie Flower', cursive;"
                                type="submit" value="Submit">

                        </div>

                    </div>
                </div>
                <div class="col">

                </div>
            </div>



        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>