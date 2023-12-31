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



?>
<form action="" method="post">
    <input type="text" name="st_id">
    <input type="submit" name="submit" value="Delete">

</form>
<?php
if(isset($_POST["submit"])){
    $s_id=$_POST['st_id'];
    $sqli="DELETE FROM student WHERE s_id='$s_id'";
   
    if ($conn->query($sqli) === TRUE) {
        echo "Record deleted successfully";


      } else {
        echo "Error deleting record: " . $conn->error;
      }


}

/*select-show the database table */
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

