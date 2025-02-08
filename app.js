'use strict'

document.addEventListener('DOMContentLoaded', () => {
    // menu hamburger
    const burger = document.querySelector('#hamburger');
    const menuBody = document.querySelector('.menu-burger-body');
    const cross = document.querySelector('#cross');

    burger.addEventListener('click', () => {
        menuBody.classList.add('block');
        menuBody.classList.remove('hide');
    });

    cross.addEventListener('click', () => {
        menuBody.classList.toggle('hide');
    });
});