const inp = document.querySelectorAll(".input-field");
const toggleBtn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const dots = document.querySelectorAll(".dots span");
const pics = document.querySelectorAll(".image");

inp.forEach((i) => {
    i.addEventListener("focus", () => {
        i.classList.add("active");
    });
    i.addEventListener("blur", () => {
        if(i.value !="") return;
        i.classList.remove("active");
    });
})

toggleBtn.forEach((button) => {
    button.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});
function slider(){
    let index = this.dataset.value;
    let currPic = document.querySelector(`.img${index}`);
    
    pics.forEach(image => image.classList.remove("show"));
    currPic.classList.add("show");

    dots.forEach(d => d.classList.remove("active"));
    this.classList.add("active");
}

dots.forEach((dot) => {
    dot.addEventListener("click", slider);
});
