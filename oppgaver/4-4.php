<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Fornavn	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$navn 	 = $_POST ["var1"];
$navn	 = trim($navn); 
$filnavn = "filer/navn.txt";
$fil 	 = fopen($filnavn, "r");

while ($linje = fgets ($fil)) // en linje lest fra fil //
{
	if($linje != "")
	{
		$del = explode(";", $linje);   // innholdet av linjen delt opp i fornavn og etternavn //
		$fname=trim($del[0]); 
		$sname=trim($del[1]);
			
		if (strtoupper($navn)==strtoupper($fname) || strtoupper($navn)==strtoupper($sname)) // Gjør alt om til strtoupper for ikke å tenke på det.//
		{
			print ("$fname $sname <br />");
		}
	}
}
fclose ($fil);
} ?> <section></body> </html>

