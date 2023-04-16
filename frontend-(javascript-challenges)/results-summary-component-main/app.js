console.log("testing..")

let reaction_value= document.querySelector(".value-one");
let memory_value = document.querySelector(".value-two");
let verbal_value = document.querySelector(".value-three");
let visual_value = document.querySelector(".value-four");
fetch('data.json')
    .then(function(response){
        return response.json();
    })
    .then(function (data){
        for (let i = 0; i < data.length; i++){
            if (i == 0) { // Set the first value to reaction_value
              reaction_value.textContent = data[i].score;
            } else if (i == 1) { // Set the second value to memory_value
              memory_value.textContent = data[i].score;
            }
            else if(i == 2){
             verbal_value.textContent = data[i].score;
            }
            else if( i == 3){
             visual_value.textContent = data[i].score;
            }
        }
    })
    .catch(function(err){
        console.log(err);
    });
