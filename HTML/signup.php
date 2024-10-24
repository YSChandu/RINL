<?php
include("connection.php");
if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['Mobile_number'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO user_master (User_Name, Email_Id,Phone_No,Password) VALUES (?, ?, ?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $mobilenumber, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
