<?php
namespace Asis\OopProject\Controller;

use Asis\OopProject\Database\DatabaseConnection;
use Exception;

class SignupController{
    public $db;

    public function __construct() {
        $this->db = new DatabaseConnection();
    }

    public function create() {
        if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["address"]) &&
        isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm-password"])) {
        
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm-password"];


        // Check if passwords match
        if ($password === $confirmPassword) {
            $passwordHash = md5($password);
            $gender = ($_POST["gender-select"] === "Male") ? 0 : 1;

            // db connection
            try {
                $sql = "INSERT INTO users(name, age, address, email, gender, password) VALUES ('$name', '$age', '$address', '$email', '$gender', '$passwordHash')";
                $result = mysqli_query($this->db->connection(), $sql);

                if ($result) {
                    echo "Registration successful"; // Debugging
                    header('Location: ../../views/login.php');
                } else {
                    echo "Registration failed"; // Debugging
                    // Handle the error or display an error message
                }
            } catch (Exception $e) {
                echo "User registration failed !! " . $e->getMessage();
                return false;
            }
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "Please fill up all the fields !!";
    }
    }

}


// namespace Asis\OopProject\Controller;
// use Asis\OopProject\Controller;
// use Asis\OopProject\Database\DatabaseConnection;
// use Exception;

// require '../../vendor/autoload.php';



// class SignupController extends DatabaseConnection{
    

//     public function registerUser($name, $age, $address, $email, $gender, $password){
       
//         try{
            
//             $sql = "INSERT INTO users(name,age,address,email,gender,password) values('$name', '$age', '$address', '$email', '$gender', '$password')";

//             $result = mysqli_query($this->connection(),$sql);

//             if($result){
//                 return true;
//             }else{
//                 return false;
//             }

            

//         }catch(Exception $e){
//             echo "User registration failed !!". $e->getMessage();
//             return false;

        
//         }
//     }

    


    

// }
