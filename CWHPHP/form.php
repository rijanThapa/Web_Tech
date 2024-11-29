<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    if (!isset($_POST['name']) || empty(trim($_POST['name']))) {
        echo "Name is required!<br>";
    } elseif (!isset($_POST['email']) || empty(trim($_POST['email']))) {
        echo "Email is required!<br>";
    } elseif (!isset($_POST['gender']) || empty($_POST['gender'])) {
        echo "Gender is required!<br>";
    } else {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $gender = $_POST['gender'];
        $colors = isset($_POST['colors']) ? implode(', ', $_POST['colors']) : '';

       
        $stmt = $conn->prepare("INSERT INTO `users` (name, email, gender, colors) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $gender, $colors);

        if ($stmt->execute()) {
            echo "Data successfully inserted!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

mysqli_close($conn);
?>
