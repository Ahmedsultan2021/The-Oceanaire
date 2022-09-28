<?php

require_once("code.php");
// array(2) { ["email"]=> string(28) "ahmedsultan4277892@gmail.com" ["password"]=> string(5) "ddddd" }


// object(worker)#3 (6) { ["id"]=> NULL ["name"]=> string(6) "hassan" ["password":protected]=> NULL ["position"]=> string(6) "worker" ["department"]=> string(5) "sales" ["email"]=> string(13) "hassan@oc.com" }
session_start();
$email = $_POST["email"];
$password = md5($_POST["password"]);
if (empty($email) || empty($password))
 {
    header("location:login.php?erorr=empty_password_or_email");
}
else
{
    $user = login::login($email,$password);
    if ($user == null) {
        header("location:login.php?erorr=not_found");
    }
    else{
      
        switch ($user->position) {
            case 'DepartmentM':
                $_SESSION["user"]=serialize($user);
                header("location:departmentmanager.php");
                break;
            case 'GeneralM':
                $_SESSION["user"]=serialize($user);
                header("location:Generalmanager.php");
                break;
            case 'worker':
                $_SESSION["user"]=serialize($user);
                header("location:worker.php");
                break;
        }

    }
}