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

	public function getmethod(){
		include("db.php");
		$sql = ""
		if()
	}



 ?>