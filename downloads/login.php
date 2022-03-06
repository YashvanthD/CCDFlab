<?php


$name=$_POST['name'];
$pass=$_POST['pass'];



$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user"; // Database name 


// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 

$sql = "select * from user where name ='$name' and password ='$pass';";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
$Nrows=mysqli_num_rows($result);
if(!$Nrows)
{
 
  echo '<hr><h1 style="color : red">User not found <h2 style="color : black">****</h2><hr><h3>'.$error.'<h3></h1>';
}
else
{
	$table='<h1 style="color : green">Login Success </h1>';

    echo $table;
}

?>