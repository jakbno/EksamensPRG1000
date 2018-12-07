function fokus(element)			{element.style.background="yellow";}

function mistetFokus(element)	{element.style.background="";}

function musInn(element)		{

	document.getElementById("melding").style.color="lightgreen";
	if (element==document.getElementById("var1")) 	{document.getElementById("melding").innerHTML="Fagkode skal best&aring; av 7 tegn (3 bokstaver og 4 siffre)";}
	if (element==document.getElementById("var2")) 	{document.getElementById("melding").innerHTML="Fagnavn m&aring; fylles ut";}
	if (element==document.getElementById("var3")) 	{document.getElementById("melding").innerHTML="Fagl&aelig;rer m&aring; fylles ut";}
}

function onMouseOver(element)	{element.style.background="";}

function onChange(element)		{element.style.background="";}

function musUt(element)			{document.getElementById("melding").innerHTML = "";}

function uppercase(element)		{element.style.background="blue";}

function fjernMelding()			{element.style.background="";}