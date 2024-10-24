
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizag Steel Plant Shopping - Company Sign Up</title>
    <link rel = "stylesheet" href="/RINL/CSS/signup.css">
</head>
<body>
    <div id="form" class="container">
        <h2>Company Sign Up for Vizag Steel Plant Shopping</h2>
        <form action="signup.php" method="POST" name ="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder ="Enter your name" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder ="Create a username" required>

            <label for="address">Address:</label>
            <input type="text" id="Address" name="Address" placeholder ="Enter your address" required>
             
            <label for="pin">PinCode:</label>
            <input type="pincode" id="pincode" name="pincode" placeholder ="Enter the pincode" required>
    
            <label for="Mobile number">Mobile Number:</label>
            <input type="tel" id="Mobile number" name="Mobile_number" placeholder ="Enter your mobile number" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder ="Enter your mail id" required>

            <label for="password">Password:</label>
            <input type="password" id="password1" name="password1" placeholder ="Create a password" required>

            <label for="password">Confirm Password:</label>
            <input type="password" id="password2" name="password2" placeholder ="Confirm the password" required>
    
            <input type="submit" name="submit" value="signup" >
        </form>
    </div>
</body>
</html>
