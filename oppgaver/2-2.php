<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	Er du student?<input type="text" name="svar" placeholder="svar">
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

$svar = $_POST ["svar"];
$ja	  = "j";
$nei  = "n";

if (!$svar) {
  print ("Du må skrive inn.");	
  print("<br>");
}

if ($svar == $ja) {
print ("Du er student!!");	
print("<br>");
}

else if ($svar == $nei) {  
  print ("Du er ikke student");	
  print("<br>");
}

else {
print ("Du har ikke svart ja eller nei!!");	
print("<br>");
}

} ?> </body> </html>