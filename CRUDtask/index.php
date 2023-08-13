
<!doctype html>
<html lang="en">

<head>
<title>my shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
</head>

<body>
<div class="container">
        <h2>List of Clinets</h2>
        <a class="btn" href="creat.php"><button>Add new Clients</button></a> <br>
        <br>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $servername = "localhost";
            $username = "root"; // Default value
            $password = ""; // Default value
            $database = "myshop";
            //check connection
            $connection = new mysqli($servername, $username, $password, $database);
            if ($connection->connect_error) {
                die("connection failed:" . $connection->connect_error);
            }
            //read all row from database table
            $sql = "SELECT * FROM clients";
            $result = $connection->query($sql);

            // if($result){
            //     die("connection failed:" .$connection->connect_error);
            // }
            while ($row = $result->fetch_assoc()) {
                echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>
                <a class='btn' href='/myshop/update.php?id=$row[id]'>Update</a>
                <a class='btn-del' href='/myshop/delete.php?id=$row[id]'>Delete</a>
                
            </td>
        </tr>
            ";
            }

            ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>