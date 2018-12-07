<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">

<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$filnavn = "filer/adresse.txt";
$fil   = fopen($filnavn, "r"); 

while ($linje = fgets ($fil))
{
	if($linje!="")
	{
		$del   = explode(";", $linje);
		$navn1=trim($del[0]);
		$navn2=trim($del[1]);
		$navn3=trim($del[2]);
		$navn4=trim($del[3]);
	
		print ("$navn1 , $navn2 , $navn3 , $navn4 <br>");
	}
}
fclose($fil);
} ?> <section></body> </html>

