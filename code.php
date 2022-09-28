<?php


class generalmanager  
{
    public $id;
    public $name;
    protected $password;
    public $position;
    public $email;

    function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->position = "GeneralM";
    }

    public function Add_new_users($name,$email,$position,$department)
    {
        $query="INSERT INTO `user` (`id`, `name`, `password`, `position`, `department`, `email`) 
        VALUES (NULL, 'osama', '1111', 'DepartmentM', 'cooking', 'osama@oc.com');";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $result = mysqli_query($cn,$query);
        mysqli_close($cn);
        return $result;
    }
    public function view_orders()
    {
        $query="SELECT * FROM `talapat`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $result = mysqli_query($cn,$query);
        // $data = mysqli_fetch_assoc($result);
        $data =mysqli_fetch_all($result ,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }


}

class Departmentmanager  
{
    public $id;
    public $name;
    protected $password;
    public $position;
    public $department;
    public $email;

    function __construct($name,$email,$department)
    {
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
        $this->position = "DepartmentM";
    }
    public function view_orders()
    {
        $query="SELECT * FROM `talapat`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $result = mysqli_query($cn,$query);
        // $data = mysqli_fetch_assoc($result);
        $data =mysqli_fetch_all($result ,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }

}
class worker  
{
    public $id;
    public $name;
    protected $password;
    public $position;
    public $department;
    public $email;

    function __construct($name,$email,$department)
    {
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
        $this->position = "worker";
    }
}

class login 
{
    public static function login($email,$password)
    {
        $user = null;

        $query = "select * from user where email='$email' and password='$password'";
        // $query="SELECT * FROM `user` Where `email`= '$email' AND `password` = '$password'";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $result = mysqli_query($cn,$query);
        if ($array = mysqli_fetch_assoc($result)) 
        {
            if ($array["position"]=="GeneralM") 
            {
                $user = new generalmanager($array["name"],$array["email"]);

            }elseif($array["position"]=="DepartmentM")
            {
                $user = new Departmentmanager($array["name"],$array["email"],$array["department"]);
            }
            elseif($array["position"]=="worker"){

                $user = new worker($array["name"],$array["email"],$array["department"]);
            }
        }
        mysqli_close($cn);
        return $user;
    }

}






