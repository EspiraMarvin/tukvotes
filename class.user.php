<?php
require_once('dbconfig.php');
class USER
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function register($fname,$lname,$admno,$upass)
    {
        try
        {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare("INSERT INTO users(user_firstname,user_lastname,user_admno,user_pass) 
		                                               VALUES(:fname, :lname, :admno, :upass)");

            $stmt->bindparam(":fname", $fname);
            $stmt->bindparam(":lname", $lname);
            $stmt->bindParam(":admno", $admno);
            $stmt->bindparam(":upass", $new_password);

            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return false;
    }

    public function doLogin($admno,$upass)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT user_id, user_admno, user_pass FROM users WHERE user_admno=:admno");
            $stmt->execute(array(':admno'=>$admno));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0)
            {
                if(password_verify($upass, $userRow['user_pass']))
                {
                    $_SESSION['user_session'] = $userRow['user_id'];

                 //   $this->dd($_SESSION['user_session']);
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return false;
    }

    public function is_loggedin()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;
        }
  return false;
    }


    //register contestants
    public function registerContestant($uimage,$fname,$lname,$admno,$ucourse,$uposition,$umanifesto)
    {
        try
        {

            $stmt = $this->conn->prepare("INSERT INTO contestants(userimg_url,user_firstname,user_lastname,user_admno,user_course,user_position,user_manifesto) 
		                                               VALUES(:uimage, :fname, :lname, :admno, :ucourse, :uposition, :umanifesto)");

            $stmt->bindparam(":uimage", $uimage);
            $stmt->bindparam(":fname", $fname);
            $stmt->bindparam(":lname", $lname);
            $stmt->bindParam(":admno", $admno);
            $stmt->bindParam(":ucourse", $ucourse);
            $stmt->bindParam(":uposition" , $uposition);
            $stmt->bindparam(":umanifesto", $umanifesto);

            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return false;
    }
    //function to check image extension

    //admin register

   public function registerAdmin($uname,$upass)
    {
        try
        {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare("INSERT INTO admin(user_name,user_pass)
		                                               VALUES(:uname, :upass)");

            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":upass", $new_password);

            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return false;
    }

    //admin login
    public function adminLogin($uname,$upass)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT user_id, user_name, user_pass FROM admin WHERE user_name=:uname");
            $stmt->execute(array(':uname'=>$uname));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0)
            {
                if(password_verify($upass, $userRow['user_pass']))
                {
                    $_SESSION['admin_session'] = $userRow['user_id'];

                    //   $this->dd($_SESSION['user_session']);
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return false;
    }

    public function is_adminloggedin()
    {
        if(isset($_SESSION['admin_session']))
        {
            return true;
        }
        return false;
    }
    //end of admin login function

    public function redirect($url)
    {
        header("location: $url");
    }

    public function doLogout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
    //admin logout function

    public function adminLogout()
    {
         session_destroy();
         unset($_SESSION['admin_session']);
         return true;
    }

    public function dd($var){
        var_dump($var);
        die();
    }
}
