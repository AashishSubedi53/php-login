<?php
require '../../vendor/autoload.php';
use Asis\OopProject\Controller\LoginController;
use Asis\OopProject\Controller\SignupController;


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login-btn"])){
    $loginController = new LoginController();
    $loginController->validateLogin();
    $encodedEmail = base64_encode($_POST["email"]);
    header("Location: ../../views/profile.php?e=" . $encodedEmail);

}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signup-btn"])){
    $signupController = new SignupController();
    $signupController->create();
}



?>