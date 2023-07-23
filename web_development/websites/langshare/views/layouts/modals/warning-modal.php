

<section class="modal">
  <div class="flex">
        <button class="btn-close">X</button>
   </div>
   <div>
     <h1>H ηλεκτρονική διεύθυνση υπάρχει ήδη.</h1>
   </div>

</section>


  <script src="js/main.js"></script>;

  <style>

.modal{
  display:flex;
  flex-direction:column;
  justify-content:center;
  border:1px solid 
  #ddd;
  background-color:tomato;
  max-width:100%;
  width:30%;
  padding:30px;
  min-height:20%;
  box-shadow: -1px 14px 12px -3px rgba(113,128,123,0.35);
  margin:0 auto;
}
.flex{
  heigh:30px;
}
.modal .flex{
  display:flex;
  align-items:center;
  justify: content space between;
}
.modal h1 {
  font-size: 1.5rem;
  color: #222624;
  margin: 1rem 1rem;
  font-family:helvetica;
}
button {
  cursor: pointer;
  border: none;
width:50px;
  height:50px;
  font-weight: 600;
}

.modal {
  z-index: 1;
}
.btn-close {
  transform: translate(10px, -20px);
  padding: 0.5rem 0.7rem;
  background: #C9E8D5;
  border-radius: 50%;
}

.hide{
  display:none;
}
</style>

