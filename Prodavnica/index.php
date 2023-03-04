<html>

<head>
<meta charset="UTF-8">
<title>Prodavnica </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div ID="wrap">
	
		<div ID="search">

		<img src="img/th.jpg">
		
	<form action="#" method="GET">
		<br><br>
		<input type="text" placeholder="Upiši ime ili prezime korisnika" name="criteria">
		<input type="submit" value="Pretraži postojeće korisnike"> <br>
	</form>
		
		<br>
		
		<a href="insert.php"> <img src="img/add.jpg" height="60px" title="Dodaj korisnika"></a><br><br><br>
	
		<a href="remove.php"> <img src="img/delete.jpg" height="80px" title="Izbriši korisnika"> </a>
		
    </div>
		
    <?php 
	
	include("inc/getResults.php");
	
	?>

	</div>

</body>

</html>