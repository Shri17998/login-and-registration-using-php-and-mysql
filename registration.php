<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Registration</h2>
        </div>
        <form action="registration.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="email">email</label>
                <input type="text" name="email" required>
            </div>

            <div>
                <label for="password">password</label>
                <input type="password" name="password_1" required>
            </div>

            <div>
                <label for="password">Conform Password</label>
                <input type="password" name="password_2" required>
            </div>

            <button type="submit" name="reg_user">Submit</button>
            <a href="login.php">LOGIN</a>
        </form>
    </div>
</body>

</html>