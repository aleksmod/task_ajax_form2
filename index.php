<?php
require_once "DB.php"; 
	function addUser($data) {
			if ($data) {
				$name = htmlspecialchars($data['name']);
				$phone = htmlspecialchars($data['phone']);
				$query = "
	        	INSERT INTO `task_db` 
	        	SET `name` = '".$name."',
					`phone` = '".$phone."'
	        	";
		       
		        $db = DB::getInstance();
				$res =  $db->query($query);
		        return (bool) $res;
	   }
	}

	if (isset($_POST['name']) AND isset($_POST['phone'])) {
	$res = addUser($_POST);
		if ($res) {
			die('Запись добавлена');
		} 
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<div class="row">
		  	<div class="col-4">
				<h3>New User</h3>	
				<form method="POST" accept="index.php">
					<input id="name" type="text" name="name" required>Name</br>
					<input id="phone" type="text" name="phone">Phone</br>
			  		<input type="submit" onclick="addUser()"></br>
				</form>
		  	</div>
		</div>
  </body>
  	<script src="source.js"></script>
</html>



