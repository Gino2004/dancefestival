<!DOCTYPE html>
<html>
<head>
     <title>Dancefestival</title>
	 <link href="opmaakdance.css" rel="stylesheet"/>
</head>
      <body>
			 
	         <form method="POST">
<?php
    session_start();
    if(!isset($_SESSION['ingelogd'])) $_SESSION['ingelogd'] = false;
    if($_SESSION['ingelogd'] == true){

    
?>
			 
			<center><h1>Dancefestival</h1></center>
	 <header>
		<nav>
		<img id="vuurwerk" src="vuurwerk.gif"/>
		<center>
		<div id='menu'>
		<a href="Home.php">Home</a>
        <a href="Nieuws.php">Nieuws</a>
        <a href="Kaartverkoop.php">Kaartverkoop</a>
		<a href="Contact.php">Contact</a>
		</div>
		</center>
		</nav>
    </header>
	<h1>Welkom</h1>
    Welkom op de website van dancefestival vakantiepark Amerijck op deze website</br>
    kan je artiesten zien het nieuws van de website en de ticket verkoop.
	 <h1>Artiesten:</h1>
	 <div class="responsive">
    <div class="foto">
        <a href="snelle.jpg">
            <a href="https://meproductions.nl/snelle"/><img src="snelle.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Snelle</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="suzanenfreek.jpg">
            <a href="https://suzanenfreek.nl/"/><img src="suzanenfreek.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Suzan en Freek</h2></div>
    </div>
</div>
	 
<div class="responsive">
    <div class="foto">
        <a href="Maan.jpg">
            <a href="https://maanofficial.nl/website/"/><img src="maan.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Maan</h2></div>
    </div>
</div>
	 
<div class="responsive">
    <div class="foto">
        <a href="martin.jpg">
            <a href="https://martingarrix.com/"/><img src="martin.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Martin Garrix</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="Stuktv.jpg">
            <a href="https://www.stuk.tv/"/><img src="Stuktv.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Stuktv</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="hardwell.jpg">
            <a href="https://www.djhardwell.com/"/><img src="hardwell.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Hardwell</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="jaap.jpg">
            <a href="https://www.jaapreesema.nl/"/><img src="jaap.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Jaap Reesema</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="chef.jpg">
            <a href="https://www.chefspecialmusic.com/"/><img src="chef.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Chef special</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="Emma.jpg">
            <a href="https://www.emmaheesters.com/"/><img src="Emma.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Emma Heesters</h2></div>
    </div>
</div>

<div class="responsive">
    <div class="foto">
        <a href="rolf.jpg">
            <a href="https://rolf-music.com/"/><img src="rolf.jpg" width="600" height="400"></a>
        </a>
        <div class="naam"><h2>Rolf Sanchez</h2></div>
    </div>
</div>


<?php

    }
    if($_SESSION['ingelogd']==false){
        echo "<center><h2>U moet eerst aanmelden of inloggen voordat u op deze pagina kan komen. </h2><br/>
        <a href='aanmelden.php'>klik hier om aan te meldens</a> of <a href='inloggen.php'>klik hier om in te loggen</a></center>";
    }
    

?>



 </body>
  </form>
  </html>