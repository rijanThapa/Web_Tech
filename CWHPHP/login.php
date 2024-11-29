<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT user_id, username, password, email, address, phone_number FROM UserDetails WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $db_username, $db_password, $email, $address, $phone_number);
        $stmt->fetch();

      
        if (password_verify($password, $db_password)) {
           
            setcookie('user_id', $user_id, time() + 3600, '/');
            setcookie('username', $db_username, time() + 3600, '/');
            setcookie('email', $email, time() + 3600, '/');
            setcookie('address', $address, time() + 3600, '/');
            setcookie('phone_number', $phone_number, time() + 3600, '/');

           
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="login.php">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
