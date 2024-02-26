let slideNo = 0;

const prev = document.querySelector(".prev-card");
const next = document.querySelector(".next-card");

prev.addEventListener("click", () => {
    slideNo -= 1;
    if(slideNo < 0){
        slideNo = 1;
    }

    if(slideNo == 0){
        document.querySelector(".card-1").style.display = "block";
        document.querySelector(".card-2").style.display = "none";
    }

    if(slideNo == 1){
        document.querySelector(".card-1").style.display = "none";
        document.querySelector(".card-2").style.display = "block";
    }
});

next.addEventListener("click", () => {
    slideNo += 1;
    
    if(slideNo >= 2){
        slideNo %= 2;
    }

    if(slideNo == 0){
        document.querySelector(".card-1").style.display = "block";
        document.querySelector(".card-2").style.display = "none";
    }

    if(slideNo == 1){
        document.querySelector(".card-1").style.display = "none";
        document.querySelector(".card-2").style.display = "block";
    }
});