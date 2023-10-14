<?php
namespace Asis\OopProject\Model;

use Asis\OopProject\Database\DatabaseConnection;


class User extends DatabaseConnection{
    public $name;
    public $age;
    public $address;
    public $image;
    public $email;
    public $gender;
    public $password;

    public function all($email)
    {
        $users = [];
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->connection(), $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function updateUser($id,$name, $age, $address, $image, $email, $gender, $password){
        $sql = "UPDATE users SET name='$name', age='$age', address='$address',
        image='$image', email='$email', gender='$gender', password='$password' WHERE id='$id' ";

        $result = mysqli_query($this->connection(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }


    }


}





?>