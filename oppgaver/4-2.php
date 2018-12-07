<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>
 <input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {


$filnavn ="filer/navn.txt";
$fil = fopen($filnavn,"r"); /* filen åpnet */

while ($linje = fgets ($fil)) /* en linje lest fra fil */
{
	if($linje!=" ") /* linjen lest fra fil er ikke tom */
	{
		$del = explode(";", $linje); /* innholdet av linjen delt opp i fornavn og etternavn */
		$fname=trim($del[0]); 
		$sname=trim($del[1]);

		print ("$fname  $sname <br>");
	}
}

fclose($fil);


} ?> <section></body> </html>

