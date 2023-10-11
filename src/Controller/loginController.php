<?php
namespace Asis\OopProject\Controller;
use Asis\OopProject\Database\DatabaseConnection;


class LoginController {

    public $db;
    // private $email;
    
    public function __construct()
    {
        
        $this->db = new DatabaseConnection();
        
        
    }

    // public function getEmail(){
    //     return $this->email;
    // }

    public function validateLogin() {
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $hashed_password = md5($password);
            
    
            
            $sql = "SELECT password FROM users WHERE email='$email'";

            $result = mysqli_query($this->db->connection(), $sql);
            $row = mysqli_fetch_assoc($result);
            $db_password = $row['password'];
    
            //var_dump([$hashed_password, $loginController->LoginUser($email)]);
            // if(password_verify($hashed_password, $loginController->LoginUser($email))){
            if($hashed_password == $db_password){
                header("Location: ../../views/profile.php");
                // echo $this->email;
    
            } else {
                echo "Pass failed !!";
            }

            
    
        }else{
            echo "Please input your email and password !!";
        }

        
    }
    
}





?>