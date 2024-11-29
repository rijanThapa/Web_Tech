<?php
$servername = "localhost";  // Corrected the typo in "localhost"
$username = "root";
$password = "";
$dbname = "webtech";  // Added a semicolon to terminate the statement

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {  // Use $conn->connect_error to check for connection errors
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection is successful";
}

// Get form data
if (isset($_POST['name']) && isset($_POST['gender'])) {
    $name = $_POST['name'];  // Corrected the typo in 'name'
    $gender = $_POST['gender'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO trip (name, gender) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $gender);

    // Execute statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error while adding data: " . $stmt->error;  // Added error reporting for debugging
    }
    
    // Close the statement
    $stmt->close();
} else {
    echo "Form data is not set";
}

// Close connection
$conn->close();
?>
