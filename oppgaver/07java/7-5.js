var svar=prompt("Hva er ditt postnr?");
var riktig=true;

if (!svar) {
	riktig=false;
	document.write ("Postnr er ikke fylt ut")
}

else if (svar.length!=4){
	riktig=false;
	document.write ("Postnr er ikke 4 siffer")	
}

else {
	tegn1=svar[0];
	tegn2=svar[1];
	tegn3=svar[2];
	tegn4=svar[3];

	if (isNaN(tegn1) || isNaN(tegn2) || isNaN(tegn3) || isNaN(tegn4))
	{
		riktig=false;
		document.write ("Postnr er ikke nummere.");			
	}
}


if (riktig) {
		document.write ("Riktig")			
}
