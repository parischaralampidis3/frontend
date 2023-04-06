//refer elements
const popBanner = document.getElementById("banner");

//refer image element
const clickIcon = document.querySelector(".share-icon");

//create a function for enent
const showPopButton = () => {
  //display pop content
  popBanner.style.display = "block";
  //set a timeOut function for hiding contenet
  setTimeout(function () {
    popBanner.style.display = "none";
  }, 10000);
};

//set an event listener for image
clickIcon.addEventListener("click", showPopButton);
