<?php
session_start();
require_once("code.php");
$user =  unserialize($_SESSION["user"]);
$orders = $user->view_orders();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title> Department manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
    }

    h3,
    h4 {
        margin: 10px 0 30px 0;
        font-size: 20px;
        color: #111;
    }

    .container {
        padding: 80px 120px;
    }

    .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
    }

    .person:hover {
        border-color: #f1f1f1;
    }

    .carousel-inner img {
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%);
        /* make all photos black and white */
        width: 100%;
        /* Set width to 100% */
        margin: auto;
    }

    .carousel-caption h3 {
        color: #fff !important;
    }

    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
            /* Hide the carousel text when the screen is less than 600 pixels wide */
        }
    }

    .bg-1 {
        background: #2d2d30;
        color: #bdbdbd;
    }

    .bg-1 h3 {
        color: #fff;
    }

    .bg-1 p {
        font-style: italic;
    }

    .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }

    .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }

    .thumbnail p {
        margin-top: 15px;
        color: #555;
    }

    .btn {
        padding: 10px 20px;
        background-color: #333;
        color: #f1f1f1;
        border-radius: 0;
        transition: .2s;
    }

    .btn:hover,
    .btn:focus {
        border: 1px solid #333;
        background-color: #fff;
        color: #000;
    }

    .modal-header,
    h4,
    .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-header,
    .modal-body {
        padding: 40px 50px;
    }

    .nav-tabs li a {
        color: #777;
    }

    #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
        color: #fff !important;
    }

    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }

    .dropdown-menu li a {
        color: #000 !important;
    }

    .dropdown-menu li a:hover {
        background-color: red !important;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }

    .form-control {
        border-radius: 0;
    }

    textarea {
        resize: none;
    }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">The Oceanaire</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="band" class="container text-center">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a href="#demo3" data-toggle="collapse">
                    <img src="img/manager.png" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo3" class="collapse">
                    <p><?= $user->name ?></p>
                    <p><?= $user->position ?></p>
                    <p><?= $user->email ?></p>
                </div>
            </div>
        </div>
        <h3>wellcome MR <?= $user->name ?> </h3>
        <p><em>We love music!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>

    </div>



    <h3 class="text-center">Monitor Your business</h3>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Add and assign new users</a></li>
            <li><a data-toggle="tab" href="#menu1">Customer request progress</a></li>
            <li><a data-toggle="tab" href="#menu2">summery of each Department</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3 class="text-center">Add new user</h3>
                <?php 

                if (!empty($_GET)) {
                    # code...
                
                    if ($_GET["status"]=="Done") {
                        ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>
                <?php
                    $_GET["status"]="";
                    }
                    elseif($_GET["status"]=="empty_field")
                    {
                        ?>
                <div class="alert alert-danger">
                    <strong>danger!</strong> This alert box could indicate a successful or positive action.
                </div>
                <?php
                    }}
                    
                    ?>


                <p class="text-center"><em>ADD New Uswes to your website</em></p>

                <div class="row">
                    <div class="col-md-4">
                        <p>worker?</p>
                        <p>General manager?</p>
                        <p>department manager?</p>
                        <p>please enter email and password</p>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <form method="post" action="Add.php">
                                <div class="col-sm-12 form-group">
                                    <input class="form-control" id="name" name="email" placeholder="email" type="email">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input class="form-control" id="name" name="name" placeholder="name" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input list="DOR" placeholder="position" name="position" id="browser"
                                    class="form-control">
                                <datalist id="DOR">
                                    <option value="General Manager">
                                    <option value="Department Manager">
                                    <option value="worker">
                                </datalist>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input list="de" placeholder="department" name="department" id="browser"
                                    class="form-control">
                                <datalist id="de">
                                    <option value="sales">
                                    <option value="Cooking">
                                    <option value="delivery">
                                </datalist>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input class="btn pull-right" type="submit" value="login"></input>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h2></h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">phone</th>
                            <th scope="col">fish type</th>
                            <th scope="col">cooking</th>
                            <th scope="col">Delivery</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- array(7) { ["phone"]=> string(10) "1272638173" ["FT"]=> string(4) "pory" ["cooking"]=> string(6) "mashwy" ["address"]=> string(4) "alex" ["delivery"]=> string(8) "delivery" ["comment"]=> string(7) "aaaaaaa" ["name"]=> string(0) "" } -->


                        <?php 
                        foreach ($orders as $order) {
                            ?>
                        <tr>
                            <th><?= $order["name"]  ?></th>
                            <td><?=  $order["phone"] ?></td>
                            <td><?=  $order["FT"] ?></td>
                            <td><?= $order["cooking"]  ?></td>
                            <td><?= $order["delivery"]  ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3> summary of each department </h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home1">sales department</a></li>
                    <li><a data-toggle="tab" href="#menu12">Cooking Department</a></li>
                    <li><a data-toggle="tab" href="#menu22"> Delivery</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home1" class="tab-pane fade in active">

                        <h2> Add new users </h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">fish type</th>
                                    <th scope="col"> progress </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- array(7) { ["phone"]=> string(10) "1272638173" ["FT"]=> string(4) "pory" ["cooking"]=> string(6) "mashwy" ["address"]=> string(4) "alex" ["delivery"]=> string(8) "delivery" ["comment"]=> string(7) "aaaaaaa" ["name"]=> string(0) "" } -->


                                <?php 
                        foreach ($orders as $order) {
                            ?>
                                <tr>
                                    <th><?= $order["name"]  ?></th>
                                    <td><?=  $order["phone"] ?></td>
                                    <td><?=  $order["FT"] ?></td>

                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu12" class="tab-pane fade">
                        <h2></h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">cooking</th>
                                    <th scope="col">progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- array(7) { ["phone"]=> string(10) "1272638173" ["FT"]=> string(4) "pory" ["cooking"]=> string(6) "mashwy" ["address"]=> string(4) "alex" ["delivery"]=> string(8) "delivery" ["comment"]=> string(7) "aaaaaaa" ["name"]=> string(0) "" } -->


                                <?php 
                        foreach ($orders as $order) {
                            ?>
                                <tr>
                                    <th><?= $order["name"]  ?></th>
                                    <td><?=  $order["phone"] ?></td>
                                    <td><?= $order["cooking"]  ?></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu22" class="tab-pane fade">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Delivery</th>
                                    <th scope="col">proress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- array(7) { ["phone"]=> string(10) "1272638173" ["FT"]=> string(4) "pory" ["cooking"]=> string(6) "mashwy" ["address"]=> string(4) "alex" ["delivery"]=> string(8) "delivery" ["comment"]=> string(7) "aaaaaaa" ["name"]=> string(0) "" } -->


                                <?php 
                        foreach ($orders as $order) {
                            ?>
                                <tr>
                                    <th><?= $order["name"]  ?></th>
                                    <td><?=  $order["phone"] ?></td>
                                    <td><?= $order["delivery"]  ?></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                        }
                        ?>
                            </tbody>
                        </table>



                    </div>
                </div>

            </div>
        </div>
    </div>

    

    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip"
                title="Visit w3schools">www.w3schools.com</a></p>
    </footer>




</body>

</html>