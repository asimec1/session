<?
	session_start(); 
?>
<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Prijava korisnika</title>
  </head>
  <style>
	body { margin: 10px;}
	
  </style>
<body>
<div class="container">
	<h1>Prijava korisnika</h1>
	<?php 
		include "session.php";
		
		if ($_SESSION["username"] == "") {
			print '
			 <form action="index.php" method="POST" name="signin">
				<input type="hidden" id="control" name="control" value="true">
				<div class="form-check">
					<label for="user">Korisnik:*</label>
					<input type="text" id="user" name="user" class="form-control" required>
				</div>
				<div class="form-check">
					<label for="pass">Lozinka:*</label>
					<input type="password" id="pass" name="pass" class="form-control" required>
				</div>
				<input type="submit" value="Pošalji" class="btn btn-primary">
			 </form>';
		}
	
	 ?>
</div>
</body>
</html>