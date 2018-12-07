<?php include 'head.php';?>

<form action="" method="post">
	<input type="text" name="fornavn" placeholder="Fornavn">
	<input type="text" name="etternavn"placeholder="Etternavn">
	<input type="text" name="alder"placeholder="Alder"><br>	
	<input type="submit" name ="submit">
	<input type="reset" name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

	$fornavn 	= $_POST ["fornavn"];
	$etternavn 	= $_POST ["etternavn"];
	$alder 		= $_POST ["alder"];

	print ("God dag ".$fornavn ." ".$etternavn ." Du er jo bare" .$alder ." år. Det er ikke så gale");
   
} ?> </body> </html>