<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Fornavn	<input type="text" 	name="var1">	<br><br>
  Etternavn	<input type="text" 	name="var2">	<br><br>
 <input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$fornavn   = $_POST ["var1"];
$etternavn = $_POST ["var2"];


if (!$fornavn || !$etternavn)
{
print ("Feltene må fylles ut.");
}

else {

$linje 		= $fornavn .";" .$etternavn ."\n";
$fil = fopen("filer/navn.txt", "a");
fwrite($fil, $linje);
fclose($fil);

print ("$fornavn og $etternavn er nå registrert");

}

} ?> <section></body> </html>




