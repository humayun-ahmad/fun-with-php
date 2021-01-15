<?php
require_once("../data insert/form data/db.php");

$sql = "SELECT id,firstname, lastname, email FROM information";
$data = mysqli_query($conn,$sql);
// print_r($data)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Humayun Ahmad All Contact</h1>
            <a href="../data insert/form data/index.php">Add new</a>
            <table class="table table-striped">
           
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                while($raw = mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <td><?php echo $raw['id'] ?></td>
                <td><?php echo $raw['firstname'] ?></td>
                <td><?php echo $raw['lastname'] ?></td>
                <td><?php echo $raw['email'] ?></td>
                <td>
                    <a href="#" class="btn btn-info">Show</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $raw['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </table>

        </div>
    </div>
</body>
</html>