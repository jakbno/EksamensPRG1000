<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<a href="http://localhost/eksamen/Teste%20oppgaver/oppgaver/"> FORSIDEN </a>

<form action="" method="post">
		<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br><section>


<?php if (isset($_POST['submit'])) {

$nr = 1;

for ($nr=1; $nr<=10; $nr++){
  print("$nr Har kvadratet ".$nr*$nr."<br>");
}

} ?> <section></body> </html>