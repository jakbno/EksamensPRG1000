<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
Klassekode	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$klassekode	 = $_POST ["var1"];

if (strlen($klassekode) !=3) {
	print("Det er helt feil.");
}
else
{
	print("Utrolig bra!");
}

} ?> <section></body> </html>




	