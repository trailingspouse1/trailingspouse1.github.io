randomNumber = Math.floor(Math.random()*3+1);

window.onload = function() {
	if (randomNumber == 1) {
		document.getElementById("q1").style.display = "inline";
		document.getElementById("q2").style.display = "none";
		document.getElementById("q3").style.display = "none";
		d 
	}
	if (randomNumber == 2) {
		document.getElementById("q1").style.display = "none";
		document.getElementById("q2").style.display = "inline";
		document.getElementById("q3").style.display = "none";

	}
	if (randomNumber == 3) {
		document.getElementById("q1").style.display = "none";
		document.getElementById("q2").style.display = "none";
		document.getElementById("q3").style.display = "inline";
	}
