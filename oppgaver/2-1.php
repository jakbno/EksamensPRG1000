<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	
	Hva er 3 ganger 3?<input type="text" name="svar" placeholder="svar">
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>


<?php if (isset($_POST['submit'])) {

$svar 		= $_POST ["svar"];
$riktigsvar = 9;


if (!$svar) {
  print ("Du må skrive inn.");	
  print("<br>");
}

if (!is_numeric($svar)) {
print ("Det må være tall!");	
print("<br>");
}

else if ($svar != $riktigsvar) {  
  print ("Svaret er feil. 3 * 3 er ikke $svar");	
  print("<br>");
}

else {
print ("Riktig!!");	
print("<br>");
}

   
} ?> </body> </html>