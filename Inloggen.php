<!DOCTYPE html>
<html>
<head>
     <title>Inloggen</title>
	 <link href="opmaakdance.css" rel="stylesheet"/>
</head>
      <body>
			 
	         <form method="POST">
			 
			<center><h1>Inloggen</h1></center>
	<center>
	<table>
	<tr>
	 <td>Gebruikersnaam:</td>
	 </tr>
	 <tr>
	 <td><input type="text" name="gebruikernaam" value="gebruikersnaam"/></td>
	 </tr>
	 <tr>
	 <td>Wachtwoord:</td>
	 </tr>
	 <tr>
	 <td><input type="password" name="wachtwoord" value="wachtwoord"/></td>
	 </tr>
	 </table>
	 </center>
	 <center><input type="submit" name="login" value="Login"/></center>
  </body>
  </form>
  </html>
 
 
<?php
include("dbdancefestival.php");
session_start();
if(isset($_POST['login'])){
     
	$gebruikernaam = $_POST['gebruikernaam'];
	$wachtwoord = $_POST['wachtwoord'];

	$query = "SELECT * FROM klanten WHERE gebruikernaam = '$gebruikernaam' AND wachtwoord = '$wachtwoord'";
	$stm =$pdo->prepare($query);
	if($stm->execute()== true )
		
		$klant =$stm->fetch(PDO::FETCH_OBJ);
		if($klant == null) $_SESSION['ingelogd']= false;
		else {
			echo"goededag".$klant->gebruikersnaam;
			$_SESSION['ingelogd'] = true;
			Header('Location: Home.php');
			
		}

	}
?>