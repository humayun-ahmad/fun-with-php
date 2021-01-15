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
                    <a href="show.php?id=<?php echo $raw['id'] ?>" class="btn btn-info">Show</a>
                    <a href="edit.php?id=<?php echo $raw['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $raw['id'] ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </table>

        </div>
    </div>

    <section class="pop-up-box">
        <!-- Button trigger modal -->
       

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 style="color:red" class="modal-title" id="exampleModalLabel" >Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure, You want to delete this data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <?php
                    while($raw = mysqli_fetch_assoc($data)){
                ?>
                <a href="delete.php?id=<?php echo $raw['id'] ?>"> Confirm</a>
                <?php
                    }
                ?>

            </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>