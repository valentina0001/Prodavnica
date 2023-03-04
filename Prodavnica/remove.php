<html>

<head>
<meta charset="UTF-8">
<title> Prodavnica </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div ID="wrap">
	<br>
		<div ID="search">
     
		<br>
			<a href="index.php"> <input type="text" placeholder=" Postojeći korisnici"></a>
			<a href="insert.php"> <input type="text" placeholder=" Upišite novog korisnika"></a>
		
		</div>
		
		<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM prodavci";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
				
				<div ID="result">
				
				<a href="inc/removeContact.php?ID=<?php echo $row['ID'] ?>"> <img src="img/delete.jpg"> </a>
				<p><b>Ime i prezime : </b> <?php echo $row['ime'] . " " . $row['prezime']; ?> </p>
				
				<p><b> Email: </b> <?php echo $row['email']; ?> </p>
				
				</div>
				
				<?php
			}
			
		} else {
			echo "No contacts!";
		}
		
		?>
		
		
	</div>

</body>

</html>