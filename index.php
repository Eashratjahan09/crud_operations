<!-- create a database "uiu"
create a table inside database uiu, "student"
field/column----sl, s_id, s_name, s_email -->

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
else{
    echo "successfully connected";
}

/*Insert */
$sql = "INSERT INTO student (s_id, s_name, s_email)
VALUES ('2909999', 'MITI', 'MITI@GMAIL.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>