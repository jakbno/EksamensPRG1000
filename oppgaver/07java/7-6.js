var svar=prompt("Klassekode(eks IT1)");
var riktig=true;

if (!svar) {
	riktig=false;
	document.write ("klassekode er ikke fylt ut")
}

else if (svar.length!=3){
	riktig=false;
	document.write ("klassekode er ikke 3 siffer")	
}

else {
	tegn1=svar[0];
	tegn2=svar[1];
	tegn3=svar[2];

	if (!isNaN(tegn1) || !isNaN(tegn2))
	{
		riktig=false;
		document.write ("De to forste maa varee bokstaver");			
	}

	else if (isNaN(tegn3))
	{
		riktig=false;
		document.write ("Den siste maa være et tall");			
	}
}


if (riktig) {
		document.write ("Riktig")			
}
