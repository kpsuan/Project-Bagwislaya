const menu = document.querySelector('#mobile-version'); //target the mobile version menu 
const link = document.querySelector('.navigation-menu'); //target the nav  menu 

//function runs one its clicked 
menu.addEventListener('click', function(){
    menu.classList.toggle('is-active'); //toggles the is active class 
    link.classList.toggle('active');  //toggle the active class
})