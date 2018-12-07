<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Tall 1<input type="text" name="var1" placeholder="et tall"><br><br>
  <input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br><section>


<?php if (isset($_POST['submit'])) {

$nr1 = $_POST ["var1"];

$nr = 1;
$sum = 0;

for ($nr=1; $nr<=$nr1; $nr++)
{
  $sum=$sum + $nr;
  print("$nr");
}
{
  print("<br>");
  print("Summen av tallene fra 1 til 10 er $sum<br>");
  print("Gjennsomsnittet av tallet er ".$sum/10);
}

} ?> <section></body> </html>



