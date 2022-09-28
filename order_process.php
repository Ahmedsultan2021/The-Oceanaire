<?php
// array(7) { ["name"]=> string(12) "Ahmed sultan" ["phone"]=> string(11) "01272638173" ["address"]=> string(4) "alex" ["FT"]=> string(4) "pory"
    //  ["cooking"]=> string(6) "mashwy" ["DOR"]=> string(9) "resturant" ["comments"]=> string(5) "adddd" }

    

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $FishType = $_POST["FT"];
    $cooking = $_POST["cooking"];
    $DOR = $_POST["DOR"];
    $comments = $_POST["comments"];


    if (empty($name) || empty($phone) || empty($FishType) || empty($cooking) || empty($DOR)) 
    {
        header("location:order.php?error=embty_field");
    }
    else{
require_once("config.php");
$query= "INSERT INTO `talapat` (`name`, `phone`, `FT`, `cooking`, `address`, `delivery`, `comment`)
 VALUES ('$name', '$phone', '$FishType', '$cooking', '$address', '$DOR', '$comments');";
$cn= mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
$result = mysqli_query($cn,$query);
header("location:order.php?error=");

    }

