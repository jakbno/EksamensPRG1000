<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Navn	<input type="text" 	name="var1">	<br><br>
  Adresse	<input type="text" 	name="var2"><br><br>
  Postnr	<input type="text" 	name="var3"><br><br>
  Poststed	<input type="text" 	name="var4"><br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$navn 	 = $_POST ["var1"];
$adresse = $_POST ["var2"];
$postnr	 = $_POST ["var3"];
$sted 	 = $_POST ["var4"];

$filnavn = "filer/adresse.txt";


if (!$navn || !$adresse || !$postnr || !$sted)
{
print ("Feltene må fylles ut.");
}

else {

$linje = $navn .";" .$adresse .";" .$postnr .";" .$sted ."\n";
$fil   = fopen($filnavn, "a");
fwrite($fil, $linje);
fclose($fil);


print ("$navn og $adresse og $postnr og $sted er nå registrert");

}


} ?> <section></body> </html>

