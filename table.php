<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet" href="styles.css">
  <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  <style>
    *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: Lucida Console, Courier, monospace;;
    box-sizing: border-box;
    }
    .body{
    min-height: 100vh;
    background-image: linear-gradient(120deg,#1B1464,#12CBC4);
    font-family: montserrat;
    }
    .table{
    width: 360px;
    background: #f1f1f1;
    height: 580px;
    padding: 80px 40px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
   }
   .th{
    background-color: #1289A7;
    color: black;
    }
    .tr{background-color: #12CBC4}
  </style>
</head>

<body>
    <table class="table">
    <tr>
     <th class="th">Id</th>
     <th class="th">Username</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM login_details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr class='tr'><td>" . $row["id"]. "</td><td>" .  $row["username"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>