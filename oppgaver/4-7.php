<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
 Et navn	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$navn 	 = $_POST ["var1"];
$navn	 = trim($navn); 
$filnavn = "filer/adresse.txt";
$fil 	 = fopen($filnavn, "r");


while ($linje = fgets ($fil)) // en linje lest fra fil //
{
	if($linje != "")
	{
		$del = explode(";", $linje);   // innholdet av linjen delt opp i fornavn og etternavn //
		$navn1=trim($del[0]);
		$navn2=trim($del[1]);
		$navn3=trim($del[2]);
		$navn4=trim($del[3]);
			
		if (strtoupper($navn)==strtoupper($navn1) || strtoupper($navn)==strtoupper($navn2) || strtoupper($navn)==strtoupper($navn3) || strtoupper($navn)==strtoupper($navn4)) // Gjør alt om til strtoupper for ikke å tenke på det.//
		{
			print ("$navn1 , $navn2 , $navn3 , $navn4 <br>");
		}
	}
}
fclose ($fil);
} ?> <section></body> </html>


	