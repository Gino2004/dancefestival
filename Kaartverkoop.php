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
		<h1>Kaartverkoop:</h1>
		<table class="kaarten">
			<tr>      
                <td><label><center>Vrijdag ticket:</label>
                <input type="radio" name="ticket" value="vrijdag ticket"></center>
                <img id="ticket1" src="Kaart 1.jpg"width='500' height='250'/></td>
            </tr>
            <tr>
                <td><label><center>Zaterdag ticket:</label>
                <input type="radio" name="ticket" value="zaterdag ticket"></center>
                <img id="ticket1" src="Kaart 2.jpg"width='500' height='250'/></td>      
            </tr>
            <tr>
                <td><label><center>Vrijdag en Zaterdag ticket:</label>
                <input type="radio" name="ticket" value="vrijdag en zaterdag ticket"></center>
                <img id="ticket1" src="Kaart 3.jpg"width='500' height='250'/></td>
            </tr>
            <tr>
                <td><input name="aantal" type="number" placeholder="uw aantal" maxlength=60/><br/></td>
            </tr>
            <tr>
            <td><input type="submit" name="Verzenden" value="Verzenden"/></td>
            </tr>
		
<?php
include("dbdancefestival.php");
if(isset($_POST['Verzenden'])){

    $aantal = $_POST['aantal'];
    $ticket = $_POST['ticket'];
    if ($ticket == 'vrijdag ticket'){
        $prijs = 25*$aantal;
    }
    if ($ticket == 'zaterdag ticket'){
        $prijs = 25*$aantal;
    }
    if ($ticket == 'vrijdag en zaterdag ticket'){
        $prijs = 55*$aantal;
    }
$query = "INSERT INTO kaarten (ticket, prijs, aantal)  VALUES "."('$ticket','$prijs','$aantal')";

$stm= $pdo->prepare($query);

if($stm->execute())
{
    echo"";

}else echo "";


    $query = "SELECT*FROM kaarten ORDER BY kaartid DESC LIMIT 1";
	$stm= $pdo->prepare($query);
    if($stm->execute())
	{
		
	$result= $stm->fetchALL(PDO::FETCH_OBJ);
		 foreach($result as $persoon)
		 {
			 echo "<tr>";
             echo "<td><a href='Winkelwagen.php?nummer=$persoon->kaartid'><img src='winkelwagen.jpg' width='80' height='80'/></a></td>";
			 echo "</tr>";

		 }
         echo"</table>";
	}

}
    
?>
</body>
</form>
</html>
