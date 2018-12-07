<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
	Tall 1<input type="text" name="var1" placeholder="svar"><br><br>
	Tall 2<input type="text" name="var2" placeholder="barn"><br><br>
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br><section>


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

} ?> <section></body> </html>