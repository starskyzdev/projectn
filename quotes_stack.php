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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="quotes_stack.php">Quotes
                            Stack</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="userdb.php">Manage User</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutadmin.php">About</a></li>
                    <?php echo '<li class="nav-item"><a class="nav-link" href="logout.php" style="color: #FF3D00;">Log Out</a></p>'; ?>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

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
                <table class="table table-striped table-hover" style="background-color: #FFE3C9;">
                    <tr>
                        <th>#</th>
                        <th>UserID</th>
                        <th>Quote</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Marie</td>
                        <td>The purpose of our live is to be happy</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Francisco</td>
                        <td>You could have the best meal in the world but never without fries</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ManapK</td>
                        <td>Never let the fear of striking out keep you from playing the game</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sulaiman02</td>
                        <td>Nothing beats Burger Ramly even if you have money for McD</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>GiorgioGio</td>
                        <td>I’m sick of following my dreams, man. I’m just going to ask where they’re going and hook up
                            with ’em later</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>GurGur</td>
                        <td>My mother always used to say: The older you get, the better you get, unless you’re a banana
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Willy</td>
                        <td>Before you marry a person, you should first make them use a computer with slow Internet to
                            see who they really are
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Mom</td>
                        <td>When your mother asks, ‘Do you want a piece of advice?’ it is a mere formality. It doesn’t
                            matter if you answer yes or no. You’re going to get it anyway
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>UninTended</td>
                        <td>Some species always say no when they say yes, yes when no
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>NoLieJustTruth</td>
                        <td>Insomnia sharpens your math skills because you spend all night calculating how much sleep
                            you’ll get if you’re able to ‘fall asleep right now.
                        </td>
                    </tr>


                </table>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary"
                        style="color: rgb(255, 208, 239); font-family: 'Indie Flower', cursive;" type="button"
                        onclick="document.getElementById('userQuote').value = ''">Edit</button>
                    <button class="btn btn-light" style="color: rgb(255, 124, 1); font-family: 'Indie Flower', cursive;"
                        type="button" onclick="document.getElementById('userQuote').value = ''">Save</button>


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