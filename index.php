<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <div>
        <form action="includes/process.php" method="POST">

                <lable>Username</lable>
                <input type="text" name="usernam" />

                <lable>Password</lable>
                <input type="password" name="pass" />

                <input type="submit" name="Login" />

            </form>
    </div>
</body>
</html>
<?php
include_once 'process.php';
?>