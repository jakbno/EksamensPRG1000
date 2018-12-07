<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" href="../style.css"></head><body>
	
<form action="" method="post">
	<input type="text" name="tall1" placeholder="tall 1">
	<input type="text" name="tall2"placeholder="tall 2"><br>	
	<input type="submit" name ="submit"> <input type="reset"name ="reset">
</form><br>

<?php if (isset($_POST['submit'])) {

	$tall1 	= $_POST ["tall1"];
	$tall2 	= $_POST ["tall2"];
	$sum 	= $tall1 + $tall2;
	$diff	= $tall1 - $tall2;
	$mult	= $tall1 * $tall2;
	$div	= $tall1 / $tall2;

	print ("Tall 1 er $tall1 <br>");
	print ("Tall 2 er $tall2 <br>");
	print ("Summer er $sum <br>");
	print ("Differansen er $diff <br>");
	print ("Mulitplikasjon er $mult <br>");
	print ("Mulitplikasjon er $mult <br>");
	print ("Kvotien er $div");

   
} ?> </body> </html>