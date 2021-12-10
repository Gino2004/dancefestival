<!DOCTYPE html>
<html>
<head>
     <title>Aanmelden</title>
	 <link href="opmaakdance.css" rel="stylesheet"/>
</head>
      <body>
			 
	         <form method="POST">
			 
			
	
    <h1>Aanmelden:</h1>
	<table>
    <tr>
	 <td>Naam:</td>
	 </tr>
	 <tr>
	 <td><input name="naam" type="text" placeholder="naam" maxlength=100/></td>
	 </tr>
     <tr>
	 <td>Adres:</td>
	 </tr>
	 <tr>
	 <td><input name="adres" type="text" placeholder="adres" maxlength=100/></td>
	 </tr>
     <tr>
	 <td>Telefoonummer:</td>
	 </tr>
	 <tr>
	 <td><input name="telefoonnummer" type="text" placeholder="telefoonnummer" maxlength=100/></td>
	 </tr>
     <tr>
	 <td>Email:</td>
	 </tr>
	 <tr>
	 <td><input name="email" type="text" placeholder="email" maxlength=100/></td>
	 </tr>
	<tr>
	 <td>Gebruikersnaam:</td>
	 </tr>
	 <tr>
	 <td><input name="gebruikernaam" type="text" placeholder="gebruikernaam" maxlength=100/></td>
	 </tr>
	 <tr>
	 <td>Wachtwoord:</td>
	 </tr>
	 <tr>
	 <td><input name="wachtwoord" type="password" placeholder="wachtwoord" maxlength=100/></td>
	 </tr>
	 </table>
	 <input type="submit" name="verstuur" value="verstuur"/>
	 <input type="submit" name="terug" value="terug naar homepagina"/>
  
<?php
include("dbdancefestival.php");
if(isset($_POST['terug'])){	
	header('Location: Home.php');
  }
if(isset($_POST['verstuur'])){
	

    $naam=$_POST['naam'];
	$adres=$_POST['adres'];
    $telefoonnummer=$_POST['telefoonnummer'];
	$email=$_POST['email'];
    $gebruikernaam=$_POST['gebruikernaam'];
	$wachtwoord=$_POST['wachtwoord'];



    $query = "INSERT INTO klanten (naam,adres,telefoonnummer,email,gebruikernaam,wachtwoord) VALUES ".
    "('$naam','$adres','$telefoonnummer','$email','$gebruikernaam','$wachtwoord')";
 
 
 $stm=$pdo->prepare($query);

if($stm->execute())
{
echo"query gelukt";


}else echo "query is niet goed uitgevoerd";


}





?>
</body>
  </form>
  </html>