function getData(pFrom){

	var xhttp = new XMLHttpRequest();
	xhttp.onload = function(){
		var json = JSON.parse(this.responseText);
		document.getElementById("result").innerHTML = json;

	}

	xhttp.open("GET",pFrom.action + pFrom.username.value, true);
	xhttp.send();
}
