const clickFirstLink = document.getElementById("clickOne");
const clickSecondLink = document.getElementById("clickTwo");
const clickThirdLink = document.getElementById("clickThree");
const clickFourthLink = document.getElementById("clickFour");
const clickFifthLink = document.getElementById("clickFive");
//event listeners

clickFirstLink.addEventListener("click", toggleFirstQuestion);
clickSecondLink.addEventListener("click", toggleSecondQuestion);
clickThirdLink.addEventListener("click", toggleThirdQuestion);
clickFourthLink.addEventListener("click", toggleFourthQuestion);
clickFifthLink.addEventListener("click", toggleFifthQuestion);
//functions

function toggleFirstQuestion() {
  var element = document.getElementById("answerOne");
  element.classList.toggle("hidden");
}

function toggleSecondQuestion() {
  var element = document.getElementById("answerTwo");
  element.classList.toggle("hidden");
}

function toggleThirdQuestion() {
  var element = document.getElementById("answerThree");
  element.classList.toggle("hidden");
}

function toggleFourthQuestion() {
  var element = document.getElementById("answerFour");
  element.classList.toggle("hidden");
}

function toggleFifthQuestion() {
  var element = document.getElementById("answerFive");
  element.classList.toggle("hidden");
}
