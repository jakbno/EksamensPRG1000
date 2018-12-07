<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
  Tall 1<input type="text" name="var1" placeholder="tall"><br><br>
  Tall 2<input type="text" name="var2" placeholder="tall"><br><br>
  Tall 3<input type="text" name="var3" placeholder="tall"><br><br>
  Tall 4<input type="text" name="var4" placeholder="tall"><br><br>
  Tall 5<input type="text" name="var5" placeholder="tall"><br><br>
  
  <input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$nr1  = $_POST ["var1"];
$nr2  = $_POST ["var2"];
$nr3  = $_POST ["var3"];
$nr4  = $_POST ["var4"];
$nr5  = $_POST ["var5"];

$number = array($nr1, $nr2, $nr3, $nr4, $nr5); 

for ($nr=0;$nr<=4;$nr++)
{
print("$number[$nr],");
}

print("<br>");

for ($nr=4;$nr>=0;$nr--)
{
	print("$number[$nr],");
}

} ?> <section></body> </html>



