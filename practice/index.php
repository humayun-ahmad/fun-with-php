

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>demo practice 01</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<section class="form_part">
	<div class="container">
		<div class="row bg-light">
			<div class="col-md-12">
				<h4 class="text-center">Please Fill up the below form</h4>
				<form action="insert.php" method="post">
					<div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Frist Name</label>
				    <input type="text" name="first_name" class="form-control" id="exampleInputPassword1">
				  </div>

				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Last Name</label>
				    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1">
				  </div>

				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>		
			</div>
		</div>
	</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	
</body>
</html>