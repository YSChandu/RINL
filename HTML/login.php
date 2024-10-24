<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" href="/RINL/CSS/try.css">
</head>
<body>
    <div class="container">
        <h2>Vizag Steel Plant Login</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="login">
            </div>
        </form>
        <div class="forgot-password">
            <a href="/RINL/HTML/forgot.html">Forgot Password?</a>
        </div>
        <div class=" Sign-up">
            <h5> Don't have an account? <a href = "/RINL/HTML/signups.html"> Sign up</a></h5>
        </div>
    </div>

</body>
</html>