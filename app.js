"use strict";
document.addEventListener('DOMContentLoaded', () => {
    //burger menu
    let burger = document.getElementById('hamburger');
    // const burgerLines = document.querySelector('#burger-lines');
    // const burgerIcon = document.querySelector('#burger-icon');
    let menu = document.querySelector('.menu-navigation-container');
    
    burger.addEventListener('click', () => {
        menu.classList.toggle('active');
        burger.classList.toggle('open');
        // burgerIcon.classList.toggle('open');
    });

    // cross to close menu burger
    cross.addEventListener('click', () => {
        menuBody.classList.toggle('hide');
    });
});
