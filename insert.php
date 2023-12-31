<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information Form</title>
</head>
<body>
 
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $s_id = $_POST["s_id"];
  $s_name = $_POST["s_name"];
  $s_email = $_POST["s_email"];

  // Insert data into the database
  $sql = "INSERT INTO student (s_id, s_name, s_email) VALUES ('$s_id', '$s_name', '$s_email')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<th>SL</th><th>S_ID</th><th>S_NAME</th><th>S_EMAIL</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>$row[sl]</td>";
        echo "<td>$row[s_id]</td>";
        echo "<td>$row[s_name]</td>";
        echo "<td>$row[s_email]</td>";
        echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

$conn->close();
?>

</body>
</html>
