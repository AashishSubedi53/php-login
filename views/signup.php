


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signup.css"> 
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form class="sign-up" action="../src/Controller/web.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" >
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="">Gender:</label>
                <input type="radio"  value="Male" name="gender-select">Male

                <input type="radio"  value="female" name="gender-select">Female
            </div>

            <!-- <div class="form-group">
                <label for="profile-image">Profile Image: (optional)</label>
                <input type="file" id="profile-image" name="profile-image" accept="image/*">
            </div> -->

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" >
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" >
            </div>

            <div class="form-group">
                <input type="submit" id="sign-up" name="signup-btn" value="Sign Up">
            </div>
            Already have an account? <a id="login" href="./login.php">Log in</a>
        </form>
    </div>
</body>
</html>
