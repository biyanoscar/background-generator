var css = document.querySelector("h3");
var color1 = document.querySelector(".color1");
var color2 = document.querySelector(".color2");
var body = document.getElementById("gradient");
var btnWarna = document.getElementById("BtnSetWarna");

// body.style.background= "red";
function setGradient() {
	body.style.background= 
		"linear-gradient(to right," + color1.value + ", "+ color2.value + ") ";


	css.textContent = body.style.background + ";";
}


color1.addEventListener("input", setGradient);

color2.addEventListener("input", setGradient);

window.onload =setGradient; //1. Write code so that the colour inputs match the background generated on the first page load. 



//3. BONUS: Add a random button which generates two random numbers for the colour inputs.
function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function SetWarnaRandom() {
	color1.value=getRandomColor();
	color2.value=getRandomColor();
	setGradient()
}

btnWarna.addEventListener("click",SetWarnaRandom);