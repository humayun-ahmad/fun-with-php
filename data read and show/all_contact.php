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


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    
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
                    <a href="delete.php?id=<?php echo $raw['id'] ?>" class="btn btn-danger" onclick="sweet()">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </table>
            
        </div>
    </div>

    <section class="pop-up-box">
    
    </section>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    function sweet() {
        swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(){
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    }
</script>

</body>
</html>