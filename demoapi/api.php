<?php 
	header('content_type: application/json');

	$request = $_SERVER['REQUEST_METHOD'];

	switch ($request) {
		case 'GET':
			getmethod();

			break;
		case 'POST':
			# code...
			break;
		case 'PUT':
			# code...
			break;
		case 'DELETE':
			# code...
			break;
		default:
			# code...
			break;
	}

	function getmethod(){
		include("db.php");
		$sql = "SELECT * FROM information";
		$result = mysqli_query($connection, $sql);
		
		

		if(mysqli_num_rows($result)){
			$rows = array();

			while($data = mysqli_fetch_assoc($result)){
				$rows['result'][] = $data;
			}
			
			echo json_encode($rows);
			
		}
		else{
			echo "No data into database, Please check your database!";
		}
	}



 ?>