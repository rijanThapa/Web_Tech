<?php
include 'connection.php'; 

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        
        echo "<h2>Users Data</h2>";
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Colors</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['sno']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['gender']) . "</td>
                    <td>" . htmlspecialchars($row['colors']) . "</td>
                  </tr>";
        }
        
        echo "</table>";
    } else {
        echo "No records found!";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
