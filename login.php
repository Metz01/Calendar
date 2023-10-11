<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Accesso</h2>
    <form method="post" action="verifica_login.php">
        <label for="username">Nome utente:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Accedi">
    </form>
</body>
</html>