<?php
session_start();

require ('../vendor/autoload.php');

use Asis\OopProject\Model\User;

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
    <link rel="stylesheet" href="../assets/css/signup.css">
    <title>Edit Profile</title>
</head>

<body>
    <div class="container">
        
        <form class="sign-up" action="../src/Controller/web.php" method="POST" enctype="multipart/form-data">
            <?php foreach($users as $user){?>
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"
                value="<?php echo $user['name']; ?>"
                >
            </div>

            

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age"
                value="<?php echo $user['age']; ?>">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address"
                value="<?php echo $user['address']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"
                value="<?php echo $user['email']; ?>">
            </div>

            <div class="form-group">
                <label for="">Gender:</label>
                <input type="radio" value="Male" name="gender-select"
                 <?php echo ($user['gender'] == 0) ? 'checked': ''; ?> >Male
                
                <input type="radio"  value="Female" name="gender-select"
                 <?php echo ($user['gender'] == 1) ? 'checked': ''; ?>>Female
            </div>

            <div class="form-group">
                <label for="image">Profile Image:</label>
                <input type="file" id="image" name="image"
                value="<?php echo $user['image']; ?>">
                <img src="<?php echo $user['image']; ?>" alt="Profile image">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"
                >
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password"
                >
            </div>
            <?php } ?>

            <div class="form-group">
                <input type="submit" id="sign-up" name="update-btn" value="Update">
            </div>
        </form>
    </div>
</body>

</html>