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

/*select-show the database table */
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

//mine code
// if ($result->num_rows > 0) {
//   echo "<table border='1'>
//   <tr>
//   <th>SL</th>
//   <th>S_ID</th>
//   <th>S_NAME</th>
//   <th>S_EMAIL</th>
//   </tr>";



//   while($row = $result->fetch_assoc()) {

//     echo "<tr>
//     <td>".$row["sl"]."</td>
//     <td>".$row["s_id"]."</td>
//     <td>".$row["s_name"]."</td>
//     <td>". $row["s_email"]."</td>
//     </tr>";

//     // echo "sl: " . $row["sl"]. " - S_id: " . $row["s_id"]. " " . " - S_name: " .$row["s_name"]. " - S_Email: " .$row["s_email"]."<br>";
//   }

// } else {
//   echo "0 results";
// }


//sirer code

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