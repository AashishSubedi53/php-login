<?php

namespace Asis\OopProject\Controller;
use Asis\OopProject\Database\DatabaseConnection;
use Asis\OopProject\Model\User;
use Exception;

class EditUser{
    private $db;
    private $id;
    private $name;
    private $age;
    private $address;
    private $email;
    private $gender;
    private $password;
    private $confirmPassword;
    



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
        $gender = ($_POST["gender-select"] === "Male") ? 0 : 1;
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm-password"];

        
        // Check if passwords match
        if(!empty($_POST["password"])){
            if ($password === $confirmPassword) {
                $passwordHash = md5($password);
    
                // db connection
                try {
                    $update = new User();
                    $update->updateUser($id,$name,$age, $address,$email,$gender);
                    $update->updatePassword($id, $passwordHash);
    
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
            } else{
                echo "Passwords do not match!";
            }
        }
         else {
            try {
                $update = new User();
                $update->updateUser($id,$name,$age, $address,$email,$gender);
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
            
        }
    } else {
        echo "Please fill up all the fields !!";
    }
    }

    public function changeProfile(){
       if(isset($_POST['id']) && isset($_POST['change-profile'])){
        $id = $_POST['id'];

        $file = $_FILES["image"];
        $filename = $file["name"];
        $tempname = $file["tmp_name"];
        $uploadDir = "../../assets/imgs/";
        $folder = $uploadDir . $filename;
        move_uploaded_file($tempname, $folder);


        if(!empty($_FILES["change-profile"])){
            try{
                $changeProfile = new User();
                $changeProfile->updateImage($id, $filename);

            } catch(Exception $e){
                echo $e->getMessage();

            }

        }else{
           $this->update();

        }
        

       }

    }


    
    

}


?>