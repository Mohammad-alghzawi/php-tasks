<?php 
  if(!isset ($_GET['id'])){
    $id=$_GET["id"]; 

    $servername = "localhost";
$username = "root"; // Default value
$password = ""; // Default value
$database = "myshop";
$connection = new mysqli($servername, $username, $password, $database);

$sql="UPDATE FROM clients WHERE id=$id";
$result = $connection->query($sql);
}
header("Location: index.php");
exit;

?>