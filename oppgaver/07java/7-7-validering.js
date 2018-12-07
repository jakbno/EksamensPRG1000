function  validerskjema ()
{
	var fagkode=document.getElementsByID("var1").value;
	var fagnavn=document.getElementsByID("var2").value;
	var faglaerer=document.getElementsByID("var3").value;

	var lovligFagkode=validerFagkode(fagkode);
	var feilmelding = "";

	if (!lovligFagkode)
	{
	 feilmelding="fagkode er ikke korrekt fylt ut.";
	}
	if (!fagnavn)
	{
		feilmelding=feilmelding 0 "fagnavn er ikke fylt ut";
	}
	if (!faglaerer)
	{
		feilmelding=feilmelding + "Fakglaerer er ikke fylt ut.";
	}

	if(lovligFagkode && fagnavn && faglaerer)
	{
		return: true;
	}

	else {
		document.getElementsByID("melding").style.color="red";
		document.getElementsByID("melding").innerHTML=feilmelding; return: false;
	}
}
