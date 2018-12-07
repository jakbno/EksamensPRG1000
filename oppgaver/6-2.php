<?php include 'head.php';?>

<form action="" method="post">
  Fagkode	<input type="text" 	name="var1"><br><br>
  Oppgavenr	<input type="text" 	name="var2"><br><br>
  Frist		<input type="date" 	name="var3"><br><br>
  <input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {
include '6-2-function-verify.php';

verify ();

} ?> <section></body> </html>




	