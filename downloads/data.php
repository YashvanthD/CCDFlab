
<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS user";
if ($conn->query($sql) === TRUE) {
  echo '<br><br>DATABASE Created';
} else {
  echo '<br> <hr style="color: green"> DATABASE Not CReated' . $conn->error;
}


$conn->close(); 


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user"; // Database name 


// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 

$sql = "CREATE TABLE IF NOT EXISTS user(name varchar(150),password varchar(150));";
$result = mysqli_query($conn, $sql);

$sql = "Insert into user values('user','user');";
$result = mysqli_query($conn, $sql);
echo '<br> <br> ';
$sql = "Insert into user values('admin','admin');";
$result = mysqli_query($conn, $sql);



?>
Sample default Data
<table>
  <thead>
    <td><b>User Name</b></td>
    <td><b>Password</b></td>
  </thead>
  <tr>
    <td>
      user
    </td>
  <td>
    user
  </td>
</tr>
  <tr>
    <td>
      admin
    </td>
    <td>
      admin
    </td>
  </tr>
</table>


<style>
  table,td{
    border:solid black 2px;
  }
</style>