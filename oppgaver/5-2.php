<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
Oppgavenr.	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$oppgavenr	 = $_POST ["var1"];

if (strlen($oppgavenr) !=1) {
	print("Det er helt feil.");
}

else if (!is_numeric($oppgavenr)){
	print("Det er ikke et tall.");
}

else
{
	print("Utrolig bra!");
}

} ?> <section></body> </html>




	