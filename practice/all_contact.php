<?php 
	require_once("db.php");
	$sql = "SELECT * FROM demo_practice_01";

	$data = mysqli_query($connection, $sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>demo practice 01</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<section class="form_part">
	<div class="container">
		<div class="row bg-light">
			<div class="col-md-12">
				<h4 class="text-center title">Please Fill up the below form</h4>

				<a class="btn btn-primary" href="index.php">ADD NEW</a>

				<table class="table table-dark table-sm">
				  <tr>
				  	<th>Id</th>
				  	<th>First Name</th>
				  	<th>Last Name</th>
				  	<th>Eamil Address</th>
				  	<th>Action</th>
				  </tr>
				  <?php 
				  	while($r = mysqli_fetch_assoc($data)){

				   ?>
				  <tr>
				  	<td><?php echo $r['id'] ?></td>
				  	<td><?php echo $r['first_name'] ?></td>
				  	<td><?php echo $r['last_name'] ?></td>
				  	<td><?php echo $r['email'] ?></td>
				  	<td>
				  		<a href="#">show</a>
				  		<a href="#">edit</a>
				  		<a href="delete.php?id=<?php echo $r['id'] ?>" id="delete">delete</a>
				  	</td>
				  </tr>

				  <?php 
				  	}
				   ?>
				</table>	
			</div>
		</div>
	</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
        swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = link;
        swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
        });
      } else {
        swal("Your data is safe!");
      }
      });
  });
</script>

</body>
</html>