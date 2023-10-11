<?php
namespace Asis\OopProject\Model;

use Asis\OopProject\Database\DatabaseConnection;


class User extends DatabaseConnection{
    public $name;
    public $age;
    public $address;
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


}





?>