function parla() {
    var visibilita = document.getElementById("textVocal").style.visibility;
    var display = document.getElementById("textVocal").style.display;
    
	$.cookie("visibile", 0); //Set Cookie
    
	alert($.cookie("visibile"));
	
    if($.cookie("visibile") == 0)
    {
        visibilita = "visible";
        display = "inline"; 
		$.cookie("visibile", 1); //Set Cookie
    }
    else
    {
        visibilita = "hidden";
        display = "none"; 
    }
	
	document.getElementById("textVocal").style.visibility = visibilita;
	document.getElementById("textVocal").style.display = display;
}