<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Fornavn<input type="text" name="var1" placeholder="Fornavn etternavn"><br><br>
  <input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br><section>


<?php if (isset($_POST['submit'])) {

$navn   	= $_POST ["var1"];
$xnavn  	= explode(" ",$navn);
$fornavn 	= $xnavn[0];
$etternavn 	= $xnavn[1];

  print("Fornavnet er $fornavn<br>");
  print("Etternavn er $etternavn");


} ?> <section></body> </html>



