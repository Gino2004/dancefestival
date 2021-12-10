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
	<aside>
		<h1>Vragen over het festival:</h1>
		<table>
			<tr>
			<td>Naam:</td>
			<td><input name="Naam" type="text" placeholder="naam" maxlength=100/><br/></td>
			</tr>
			<tr>
			<td>Onderwerp:</td>
			<td><input name="subject" type="text" placeholder="onderwerp" maxlength=100/><br/></td>
			</tr>
			<tr>
			<td>Vraag:</td>
			<td><textarea name="discription" placeholder="plaats hier uw opmerking"></textarea><br/></td>
			</tr>
			<tr>
			<td>Adres:</td>
			<td><input name="Adres" type="text" placeholder="adres" maxlength=100/><br/></td>
			</tr>
			<tr>
			<td>Telefoonummer:</td>
			<td><input name="Telefoonnummer" type="text" placeholder="telefoonnummer" maxlength=100/><br/></td>
			</tr>
			<tr>
			<td>Email:</td>
			<td><input name="Email" type="text" placeholder="email" maxlength=100/><br/></td>
			</tr>
		</table>
		<input type="submit" name="Verzenden" value="Verzenden"/><br/>
	</aside>
	<h1>Over ons:</h1>
		Amerijck is een vakantiepark wat op een eiland voor de kust is gelegen.<br/> 
		Op het eiland bevinden zich een camping en een vakantiepark.<br/>
		Er zijn allerlei voorzieningen zoals winkels, restaurants en wellness faciliteiten.	
	<h1>Gegevens:</h1>
		Naam: Vakantiepark Amerijck <br/>
		Adres: Hinkelstraat 40		<br/>
		Email: Vakantieparkamerijck@gmail.com <br/>
		Telefoonnummer:0678645347
		
	
  
  <?php
 if(isset($_POST['Verzenden'])){
	 
	 $Naam = $_POST['Naam'];
	 $subject = $_POST['subject'];
	 $vraag = $_POST['discription'];
	 $discription ="Beste vakantiepark amerijek, %0D %0D mijn naam is: ".$Naam." en ik heb een vraag over: ".$vraag.
	 $Adres = $_POST['Adres'];
	 $Telefoonnummer = $_POST['Telefoonnummer'];
	 $Email =$_POST['Email'];
	
	 
	 echo"<a href='mailto:g.hanemaaijer11@gmail.com?subject = $subject&body = $discription'>Klik hier om je mail te verzenden naar de eigenaar van het vakantiepark </a>";
	
 
 
 
 }
 ?>
 </body>
  </form>
  </html>
 
 
 