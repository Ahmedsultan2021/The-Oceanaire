<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>The Oceanaire</title>
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
        letter-spacing: 10px;
        font-size: 20px;
        color: #111;
    }

    .container {
        padding: 80px 120px;
    }

    .person {
        border: 5px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
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

    #googleMap
    {
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
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h3 class="text-center">order</h3>
        <?php
if (!empty($_GET)) {
    # code...


        if ($_GET["error"] =="embty_field"){
            ?>
            <div class="alert alert-danger">
            <strong>Danger!</strong> there are a nessesery requierd fields .
        </div>
        <?php
        }
        else{
            ?>
            <div class="alert alert-success">
            <strong>success!</strong> The order was successfully completed .
        </div>
        <?php

        }}
        ?>



        <p class="text-center"><em>We love our customers!</em></p>

        <div class="row">
            <div class="col-md-4">
                <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
            </div>
            <form method="post" action="order_process.php">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text"    >
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="phone" placeholder="phone number" type="text"
                                >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input class="form-control" id="name" name="address" placeholder="Address" type="text"
                                >
                        </div>
                        <div class="col-sm-12 form-group">
                            <input class="form-control" id="name" name="FT" placeholder="enter your fish type"
                                type="text" >
                        </div>
                        <div class="col-sm-12 form-group">
                            <input class="form-control" id="cooking" name="cooking" placeholder="Cooking prefer"
                                type="text" >
                        </div>
                        <div class="col-sm-12 form-group">
                            <input list="DOR" name="DOR" id="browser" class="form-control">
                            <datalist id="DOR">
                                <option value="Delivery">
                                <option value="resturant">
                            </datalist>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment"
                        rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input class="btn pull-right" type="submit">Send</input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <h3 class="text-center">From The Blog</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
            <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
            <li><a data-toggle="tab" href="#menu2">Peter</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h2>Mike Ross, Manager</h2>
                <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h2>Chandler Bing, Guitarist</h2>
                <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h2>Peter Griffin, Bass player</h2>
                <p>I mean, sometimes I enjoy the food.</p>
            </div>
        </div>
    </div>



    <!-- Image of location/map -->

    <!-- Footer -->
    <footer class="text-center" style="background-color:#fff ;">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p style="color:#000">Bootstrap Theme Made By <a style="color:#000" href="https://www.w3schools.com"
                data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
    </footer>

    <script>
    $(document).ready(function() {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    })
    </script>

</body>

</html>