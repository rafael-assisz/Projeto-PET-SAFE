function cadastroOver(){
	
	document.getElementById('bgdrop_cadastro').style.visibility = "visible";
	document.getElementById('bgdrop_cadastro').style.opacity = "100";

}

function cadastroOut(){

	document.getElementById('bgdrop_cadastro').style.visibility = "hidden";
	document.getElementById('bgdrop_cadastro').style.opacity = "0";
	document.getElementById('cadastro').style.background = "none";
	document.getElementById('span_cadastro').style.color = "orange";

}
