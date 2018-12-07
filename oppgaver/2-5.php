<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	Tall 1<input type="text" name="var1" placeholder="svar"><br><br>
	Tall 2<input type="text" name="var2" placeholder="barn"><br><br>
	Tall 3<input type="text" name="var3" placeholder="barn"><br><br>
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

$nr1 = $_POST ["var1"];
$nr2 = $_POST ["var2"];
$nr3 = $_POST ["var3"];
$add = $nr1+$nr2;
$sub = $nr1-$nr2;
$mul = $nr1*$nr2;
$div = $nr1/$nr2;


if (!$nr1 || !$nr2 || !$nr3) {
  print ("Du må skrive inn alt"); print("<br>");
}

if ($nr1 || $nr2 || $nr3) {
  print ("Tall 1 er $nr1"); print("<br>");
  print ("Tall 2 er $nr2"); print("<br>");
  print("<br>");
 }

if ($nr3 == "1") {
  print ("Regneoperasjonene er addisjon."); print("<br>");
  print ("Resultat av utregniner er $add"); print("<br>");
}

if ($nr3 == "2") {
  print ("Regneoperasjonene er Substraksjon."); print("<br>");
  print ("Resultat av utregniner er $sub"); print("<br>");
}

if ($nr3 == "3") {
  print ("Regneoperasjonene er Multiplikasjon."); print("<br>");
  print ("Resultat av utregniner er $mult"); print("<br>");
}

if ($nr3 == "4") {
  print ("Regneoperasjonene er addisjon."); print("<br>");
  print ("Resultat av utregniner er $div"); print("<br>");
}

if ($nr3 > 4) {
	print ("Kan ikke være over 4."); print("<br>");
}


} ?> </body> </html>