<?php
$servername = "localhost";
$username = "root"; // Default value
$password = ""; // Default value
$database = "myshop";
$connection = new mysqli($servername, $username, $password, $database);





$id="";
$name = "";
$email = "";
$phone = "";
$address = "";



if ($_SERVER['REQUEST_METHOD'] == 'GET'){
     
    if(!isset ($_GET["id"])){
        header("Location: index.php");
        exit;
    }
    $id=$_GET['id'];
    //READ THE ROW of the selected clients from database table
    $sql = "SELECT * FROM clients  WHERE ID=$id";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            if(!$row){
                header("Location: index.php");
                exit;
            }
            // $id=$_POST['id'];
            // $name = $_POST["name"];
            // $email = $_POST["email"];
            // $phone = $_POST["phone"];
            // $address = $_POST["address"];
          
}
else{
    // post method  , update the data of clients
    $id=$_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
    }
    $sql="UPDATE clients set name='$name',email='$email',phone='$phone',address='$address' WHERE id=$id";
    $result = $connection->query($sql);

    header("Location: index.php");
    exit;
    // if(!$result){
    // }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myshop</title>
</head>

<body>
    <h2>Add clients</h2>
    <div>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="">Name</label><br>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

            <label for="">Email</label><br>
            <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>

            <label for="">Phone</label><br>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>

            <label for="">Address</label><br>
            <input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>