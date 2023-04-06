//refer buttons from html
//refer div elements from html
const femaleContainer = document.querySelector(".female");
const maleContainer = document.querySelector(".male");
const forwardButton = document.querySelector(".btn-forward");
const backwardButton = document.querySelector(".btn-backward");

//set event listeners
forwardButton.addEventListener("click", setForwardButton);
backwardButton.addEventListener("click", setBackwardButton);

//set counter
let counter = 0;

//set functions for listeners
function setForwardButton() {
  if (counter == 0) {
    femaleContainer.style.display = "block";
    maleContainer.style.display = "none";
  }
}
function setBackwardButton() {
  maleContainer.style.display = "block";
  femaleContainer.style.display = "none";
}

//test
console.log("forward button :", forwardButton);
console.log("backward button : ", backwardButton);
console.log("female container :", femaleContainer);
console.log("male container :", maleContainer);
