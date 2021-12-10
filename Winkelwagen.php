<!DOCTYPE html>
<html>
<head>
     <title>Dancefestival</title>
	 <link href="opmaakdance.css" rel="stylesheet"/>
</head>
      <body>
			 
	         <form method="POST">
			 
			<center><h1>Dancefestival</h1></center>
	 <header>
		<nav>
		<img id="vuurwerk" src="vuurwerk.gif"/>
		<center>
		<div id='menu'>
		<a href="Home.php">Home</a>
		<a href="Nieuws.php">Nieuws</a>
        <a href="Kaartverkoop.php">Kaartverkoop</a>
		<a href="contact.php">Contact</a>
		</div>
		</center>
		</nav>
    </header>
		<h1>Winkelwagen:</h1>
        <table class="Overzicht">
		<tr>
		<td>Ticket:</td>
		<td>Prijs:</td>
		<td>Aantal:</td>
		</tr>
<?php
include("dbdancefestival.php");
$id = $_GET['nummer'];
$query = "SELECT*FROM kaarten WHERE kaartid = '$id'";
	$stm= $pdo->prepare($query);
    if($stm->execute())
	{
		
	$result= $stm->fetchALL(PDO::FETCH_OBJ);
		 foreach($result as $persoon)
		 {
			 echo "<tr>";
			 echo "<td>".$persoon->ticket."</td>";
			 echo "<td>".$persoon->prijs."</td>";
			 echo "<td>".$persoon->aantal."</td>"; 
			 echo "</tr>";
	     }
			echo"</table>";

	}
?>
</body>
</form>
</html>