<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	Er du student?<input type="text" name="svar" placeholder="svar">
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

$svar = $_POST ["svar"];

if (!$svar) {
  print ("Du må skrive inn.");	
  print("<br>");
}

else if ($svar == "j" || $svar == "Ja" || $svar=="JA"|| $svar=="J") {
print ("Du er student!!");	
print("<br>");
}

else if ($svar == "n" || $svar == "Nei" || $svar=="nei"|| $svar=="N") {
  print ("Du er ikke student");	
  print("<br>");
}

else  {
print ("Du har ikke svart ja eller nei!!");	
print("<br>");
}

} ?> </body> </html>