
<?php
$servername = "localhost";
$username = "root"; // Default value
$password = ""; // Default value
$database = "myshop";

$connection = new mysqli($servername, $username, $password, $database);



// $name = "";
// $email = "";
// $phone = "";
// $address = "";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];



    if (empty($name) || empty($email) || empty($phone) || empty($address)) {

    }

    $sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone','$address')";
    $result = $connection->query($sql);
    header("Location: index.php");
    exit();


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
         

            <label for="">Name</label><br>
            <input type="text" name="name" ><br>

            <label for="">Email</label><br>
            <input type="email" name="email" ><br>

            <label for="">Phone</label><br>
            <input type="text" name="phone"><br>

            <label for="">Address</label><br>
            <input type="text" name="address"><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>