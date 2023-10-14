<?php
session_start();
require '../vendor/autoload.php';

use Asis\OopProject\Model\User;
use Asis\OopProject\Controller\LoginController;


// if ($_GET) {
//     if (isset($_GET["e"])) {
//         $encodedEmail = $_GET["e"];

//         $email = base64_decode($encodedEmail);
//     }
// }



if($_SESSION){
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        
    }
}



$user = new User();
$users = $user->all($email);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/profile.css">

    <title>Profile Ashish Page</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center">User Profile</h2>
                        <hr>
                        <?php foreach ($users as $user) { ?>
                            <div class="text-center">
                                
                                <img src="<?php echo  $user['image']; ?>" alt="image" class="img-fluid">
                                
                            </div>

                            <div class="text-center mt-3">
                                <h4><?php echo $user['name']; ?></h4>
                                <p><?php echo $user['email']; ?></p>
                            </div>
                            <div class="mt-4">
                                <h5>User Information</h5>
                                <ul class="list-group">

                                    <li class="list-group-item"><strong>Name:</strong> <?php echo $user['name']; ?></li>
                                    <li class="list-group-item"><strong>Email:</strong> <?php echo $user['email']; ?></li>

                                    <li class="list-group-item"><strong>Age:</strong> <?php echo $user['age']; ?></li>
                                    <li class="list-group-item"><strong>Address:</strong> <?php echo $user['address']; ?>
                                    </li>
                                    <li class="list-group-item"><strong>Gender:</strong>
                                        <?php echo $user['gender'] ? 'Female' : 'Male'; ?></li>


                                </ul>
                            <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <button><a href="editProfile.php" class="edit-btn">Edit</a>
        </button>

    </div>

    <form action="profile.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php

if($_POST){
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('Location: login.php');
    }
}

if(empty($_SESSION['email'])){
    header('Location: login.php');
}

?>