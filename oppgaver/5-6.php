<?php include 'head.php';?>

<form action="" method="post">
Fagkode	<input type="text" 	name="var1">	<br><br>
<input type="submit" name ="submit"> <input type="reset"name ="reset"></form><br><section>


<?php if (isset($_POST['submit'])) {

$fagkode	= $_POST ["var1"];
$true		= true;

if (!$fagkode) {
	$true=false;
	print("Feltene er tomme.");
}
else if (strlen($fagkode) !=7) {
	$true=false;
	print("Det er ikke 7 siffer.");
}

else
{
	$bokstaver =substr($fagkode,0,3);
	$siffer = substr($fagkode, 3,4);

	if (!ctype_alpha($bokstaver)){
	$true=false;
	print("<br>3 tre første er ikke bokstaver!");
	}

	if (!is_numeric($siffer)) {
	$true=false;
	print("<br>4 siste er ikke tall");		
	}
}

if ($true)
{
	print("<br>utrolig flink du er!");
}

} ?> <section></body> </html>




	