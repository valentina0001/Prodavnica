<html>

<head>
<meta charset="UTF-8">
<title> Prodavnica </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div ID ="wrap">
		<div ID =" Select"><br>
		<br><br>
		<img src="img/addcontact.jpg"><br>
		
			<a href="index.php"> <img src="img/R.png" height="50px" title="Upiši ime ili prezime korisnika"></a>
			<a href="remove.php"> <img src="img/O.jpg" height="50px" title="Obriši korisnika"> </a>
		
<form action="#" method="POST">
		
			<br>
		<input type="text" placeholder=" Ime " name=" ime"> </label><br>
			<br>
		<input type="text" placeholder=" Prezime "name=" prezime"> </label><br>
			<br>
		<input type="text" placeholder=" e - mail " name=" email"> </label><br><br>
		    
		<input type="submit" name=" insert" value="Dodaj"> <br> <label>  <br>
</form> 
		
		</div>
		
		<div ID ="message">
		
		<?php
		
		if(isset($_POST['insert'])) {
			
		if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email'])) {
			
			if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['email'])) {
				
			$ime = trim($_POST['ime']);
			$prezime = trim($_POST['prezime']);
			$email = trim($_POST['email']);	
			
			require('inc/connect.php');
			
			$ime = mysqli_real_escape_string($conn,$ime);
			$prezime = mysqli_real_escape_string($conn,$prezime);
			$email= mysqli_real_escape_string($conn,$email);
			
			$query = "INSERT INTO prodavci(ime, prezime, email ) VALUES ('{$ime}','{$prezime}','{$email}')";
			
			if (mysqli_query($conn,$query) === TRUE){
				echo "New record succesfully created";
			} else {
				echo "Error!";
			}
				
			} else {
				
				echo "All fields must be filled in.";
				
			}
			
		}	else {
			
			echo "All parameters must be sent.";
			
		}
			
		}
		
		?>
		</div>
		
	</div>

</body>

</html >