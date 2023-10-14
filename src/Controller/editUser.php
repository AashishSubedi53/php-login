<?php

namespace Asis\OopProject\Controller;
use Asis\OopProject\Database\DatabaseConnection;
use Asis\OopProject\Model\User;
use Exception;

class EditUser{
    private $db;



    public function __construct(){
        $this->db = new DatabaseConnection();
    }



    public function update() {
        if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["address"]) &&
        isset($_POST["email"])  && isset($_POST["password"]) && isset($_POST["confirm-password"])) {
        
            // && isset($_POST["gender-select"]) && isset($_POST["image"])
        $id = $_POST['id'];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm-password"];


        $file = $_FILES["image"];
        $filename = $file["name"];
        $tempname = $file["tmp_name"];
        $uploadDir = "../../assets/imgs/";
        $folder = $uploadDir . $filename;
        move_uploaded_file($tempname, $folder);

        



        // Check if passwords match
        if ($password === $confirmPassword) {
            $passwordHash = md5($password);
            $gender = ($_POST["gender-select"] === "Male") ? 0 : 1;

            // db connection
            try {
                $update = new User();
                $update->updateUser($id,$name,$age, $address,$folder,$email,$gender,$passwordHash);

                if (true) {
                    echo "update successful"; // Debugging
                    header('Location: ../../views/login.php');
                    
                } else {
                    echo "update failed"; // Debugging
                    // Handle the error or display an error message
                }
            } catch (Exception $e) {
                echo "User update failed !! " . $e->getMessage();
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


?>