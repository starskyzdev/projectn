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
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="quotes_stack.php">Quotes
                            Stack</a></li>
                    <li class="nav-item"><a class="nav-link active" href="userdb.php">Manage User</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutadmin.php">About</a></li>
                    <?php echo '<li class="nav-item"><a class="nav-link" href="logout.php" style="color: #FF3D00;">Log Out</a></p>'; ?>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content - search user -->
    <div class="container">
        <br>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">

                </div>
                <div class="col-md-8" style="font-family:'Indie Flower', cursive;">
                    <h2 style="color: #FFDA03;">SuS Checker</h2>
                    <br>
                    <div class="card mx-auto card w-200" style="background-color: #FFE3C9;">

                        <div class="card-body ">
                            <blockquote class="blockquote mb-lg-5" "><br>
                <div class=" input-group">
                                <input type="search" class="form-control rounded" placeholder="Search SUSer hEre"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-info"
                                    style="color: #FF3D00;">search</button>
                        </div>
                        <br>
                        <footer class=" text-center">watch your BacK<cite title="Source Title"
                                style="font-family: 'Shojumaru', cursive; color: red;"> beware</cite></footer>
                        </blockquote>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col"></div>
        </div>

        <!-- Table of user -->
        <div class="row align-items-center">
            <div class="col">

            </div>
            <div class="col-md-8">
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="fs-4 form-label"
                        style="font-family: 'Indie Flower', cursive; color: #ffffff;">
                        You trUst them ?</label>
                    <table class="table table-striped table-hover" style="background-color: #FFE3C9;">
                        <tr>
                            <th>#</th>
                            <th>UserID</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Marie</td>
                            <td>*******</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                    margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Francisco</td>
                            <td>*****</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ManapK</td>
                            <td>*******</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sulaiman02</td>
                            <td>*******</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>GiorgioGio</td>
                            <td>*****</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>GurGur</td>
                            <td>*****</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button></td>

                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Willy</td>
                            <td>*****
                            </td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Mom</td>
                            <td>******
                            </td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>UninTended</td>
                            <td>******
                            </td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>NoLieJustTruth</td>
                            <td>*****</td>
                            <td> <button class="btn btn-sm btn-secondary" style="background-color: #85A3B2; color: rgb(255, 208, 239); font-family: 'Arial';
                                margin-right: 5px;" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Show</button><button
                                    class="btn btn-sm btn-danger" style=" font-family: 'Arial';" type="button"
                                    onclick="document.getElementById('userQuote').value = ''" title="lmao"
                                    data-bs-toggle="tooltip" data-bs-placement="top">Delete</button></td>
                    </table>
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

        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col"> </div>
        </div>



    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>