<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processLogin.php" method="POST">
        
    <label for="email">email:</label>
        <input type="text" name="email" >
        <br><br>
        <label for="username">Username:</label>
        <input type="text" name="username" >
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" >
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>