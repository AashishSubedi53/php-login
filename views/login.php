<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Login Page</h1>
        <form class="login" action="../src/Controller/web.php" method='POST'>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">

            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="login-btn"></label>
                <input type="submit" id="login-btn" name="login-btn" value="Login">
            </div>



        </form>
    </div>
</body>

</html>