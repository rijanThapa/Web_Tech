<?php
include 'connection.php';

$sql = "CREATE TABLE IF NOT EXISTS `usersList` (
    `sno` INT(6) NOT NULL AUTO_INCREMENT,  
    `name` VARCHAR(50) NOT NULL,           
    `email` VARCHAR(100) NOT NULL,    
    `gender` ENUM('male', 'female') NOT NULL,  
    `colors` TEXT,                        
    PRIMARY KEY (`sno`)                  
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Table created successfully or already exists<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>
