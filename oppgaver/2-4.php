<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	Er du gift?<input type="text" name="gift" placeholder="svar"><br><br>
	Har du barn?<input type="text" name="barn" placeholder="barn"><br><br>
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

$gift = $_POST ["gift"];
$barn = $_POST ["barn"];
$ja   = "j";
$nei  = "n";


if (!$gift || !$barn) {
  print ("Du har ikke svart på sørsmålene"); print("<br>");
}

else if ($gift == $ja && $barn == $nei) {
print ("Du er gift men har ikke barn");	
}

else if ($gift == $ja && $barn == $ja) {
print ("Du er gift og har barn");	
}

else if ($gift == $nei && $barn == $nei) {
print ("Det er ikke gift og har ikke barn.");	
}

else if ($gift == $nei && $barn == $ja) {
print ("Du er ikke gift men har barn.");	
}

else  {
print ("Du har ikke svart med j/n");	
}


} ?> </body> </html>