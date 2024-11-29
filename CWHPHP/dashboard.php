<?php

if (!isset($_COOKIE['username'])) {
    
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_COOKIE['username']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($_COOKIE['email']); ?></p>
    <p>Address: <?php echo htmlspecialchars($_COOKIE['address']); ?></p>
    <p>Phone Number: <?php echo htmlspecialchars($_COOKIE['phone_number']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
