<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
Postnr.	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$postnr	 = $_POST ["var1"];

if (strlen($postnr) !=4) {
	print("Det er ikke 4 siffer.");
}

else if (!is_numeric($postnr)){
	print("Det er ikke et tall.");
}

else
{
	print("Utrolig bra!");
}

} ?> <section></body> </html>




	