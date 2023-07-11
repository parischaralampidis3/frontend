const modal = document.querySelector(".modal");
const closeModalBtn = document.querySelector(".btn-close");

const closeModal = function(){
  modal.classList.add("hide");
}

closeModalBtn.addEventListener("click",closeModal);