<?php

session_start();
require_once("code.php");
$user = unserialize($_SESSION["user"]);
// array(4) { ["email"]=> string(28) "ahmedsultan4277892@gmail.com" ["name"]=> string(5)  
// "ahmed" ["position"]=> string(15) "General Manager" ["department"]=> string(5) "sales"   }
$name = $_POST["name"];
$email = $_POST["email"];
$position = $_POST["position"];
$department = $_POST["department"];

if (empty($name) || empty($email) ||empty($position) || empty($department) )
{
    header("location:Generalmanager.php?status=empty_field");
}
else {
    $result = $user->Add_new_users($name,$email,$position,$department);
header("location:Generalmanager.php?status=Done");
}



