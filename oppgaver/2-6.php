<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	Tall 1<input type="text" name="var1" placeholder="svar"><br><br>
	Tall 2<input type="text" name="var2" placeholder="barn"><br><br>
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>


<?php if (isset($_POST['submit'])) {

$nr1 = $_POST ["var1"];
$nr2 = $_POST ["var2"];

if($nr1>$nr2) {
  print ("Tall 1 er $nr1"); print("<br>");
  print ("Tall 2 er $nr2"); print("<br>");print("<br>");
  print ("Tall 1 er større enn Tall 2");
 }

if($nr1<$nr2) {
  print ("Tall 1 er $nr1"); print("<br>");
  print ("Tall 2 er $nr2"); print("<br>");print("<br>");
  print ("Tall 1 er mindre enn Tall 2");
 }

else {
print ("feil tekst");	
}

} ?> </body> </html>