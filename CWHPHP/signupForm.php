<?php
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) &&
    isset($_POST['address']) && isset($_POST['phone'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);


    $stmt = mysqli_prepare($conn, "INSERT INTO userDetails (username, password, email, address, phone_number) VALUES (?, ?, ?, ?, ?)");


    if ($stmt === false) {
  
        die('MySQL prepare statement failed: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssss", $username, $hashed_password, $email, $address, $phone_number);

    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
