
var truevastus;
var vale;
var õige;

function genereeri(){
	var x=document.getElementById("x").innerHTML = Math.round(Math.random()*100);
	var y=document.getElementById("y").innerHTML = Math.round(Math.random()*100);
	//document.getElementById("vastus").innerHTML = x+y;
	truevastus=x+y;
}



function kontroll() {
	
	var vastus=document.getElementById("vastus").value
	
	console.log(truevastus);
	console.log(vastus);	
	console.log(vale);
	if (truevastus==vastus) {
		document.getElementById("tulemus").innerHTML ="õige";
		õige++
	}
	else if (truevastus!=vastus){
		document.getElementById("tulemus").innerHTML ="vale";
		vale++}
}

function tulemuseks() {
	document.getElementById("wrong").value=vale
	document.getElementById("right").value=õige
	console.log(vale);
	
}
